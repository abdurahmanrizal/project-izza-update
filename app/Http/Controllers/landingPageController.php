<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wp4vPost;
use App\wp4vComment;
use App\wp4vUser;
use App\Gallery;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class landingPageController extends Controller
{
    public function index()
    {
       $data = wp4vPost::with('comment')
       ->where('post_type', 'post')
       ->orderBy('id','desc')
       ->get();
        // $remove_string =['<!-- wp:paragraph -->', '/^[<!-- wp:image | <!-- \wp:image]/','<!-- /wp:paragraph -->']; // menghilangkan <!-- wp:paragraph --> <!-- wp:image {"id":226,"sizeSlug":"large"} -->
       foreach($data as $row) {
            $data_content[] = [
                'content' => $this->getTextBetweenTags($row->post_content),
                'title'   => $row->post_title,
                'id'      => $row->id,
                'post_name' => $row->post_name
            ];
       }

        return view('landingpage.index',['contents' => $data_content,'gallery' => $this->resourceLimitThree()]);
    }

    public function allNews()
    {
        $data_news = wp4vPost::with('comment')
        ->where('post_type', 'post')
        ->paginate(5);

        $news = [];
        foreach($data_news as $row) {
            $news[] = [
                'content'   => $this->getTextBetweenTags($row->post_content),
                'title'     => $row->post_title,
                'post_date' => date('d', strtotime($row->post_date)) . ' ' . $this->convertMonth(date('m', strtotime($row->post_date))) . ' ' . date('Y', strtotime($row->post_date)),
                'post_name' => $row->post_name,
                'comment'   => count($row->comment),
                'id'        => $row->id,
                'urlNews'   => url('/news/detail/'. $row->post_name)
            ];
        }

        $rand_news = wp4vPost::with('comment')
        ->where('post_type', 'post')
        ->inRandomOrder()
        ->limit(5)->get();

        foreach($rand_news as $row_rand_news) {
            $data_rand_news[] = [
                'content'   => $this->getTextBetweenTags($row_rand_news->post_content),
                'title'     => $row_rand_news->post_title,
                'post_date' => date('d', strtotime($row_rand_news->post_date)) . ' ' . $this->convertMonth(date('m', strtotime($row_rand_news->post_date))) . ' ' . date('Y', strtotime($row_rand_news->post_date)),
                'post_name' => $row_rand_news->post_name,
                'comment'   => count($row_rand_news->comment),
                'id'        => $row_rand_news->id,
                'urlNews'   => url('/news/detail/'. $row_rand_news->post_name)
            ];
        }

        return response()->json([
            'total'        => $data_news->total(),
            'current_page' => $data_news->currentPage(),
            'last_page'    => $data_news->lastPage(),
            'next_page_url'=> $data_news->nextPageUrl(),
            'prev_page_url'=> $data_news->previousPageUrl(),
            'data'         => !empty($data_news) ? $news : null,
            'data_random_news' => $data_rand_news
        ],200);
    }

    public function detailNews(Request $request)
    {
        $explode_url = explode('/', $request->current_url);

        $data_news = wp4vPost::with('comment')
        ->where('post_name', $explode_url[5])
        ->first();

        $img_source = $this->getTextBetweenTags($data_news['post_content']);
        $post_date  =  date('d', strtotime($data_news['post_date'])) . ' ' . $this->convertMonth(date('m', strtotime($data_news['post_date']))) . ' ' . date('Y', strtotime($data_news['post_date'])). ' ' . date('H:i', strtotime($data_news['post_date']));

        $rand_news = $this->randomNews();

        foreach($rand_news as $row_rand_news) {
            $data_rand_news[] = [
                'content'   => $this->getTextBetweenTags($row_rand_news->post_content),
                'title'     => $row_rand_news->post_title,
                'post_date' => date('d', strtotime($row_rand_news->post_date)) . ' ' . $this->convertMonth(date('m', strtotime($row_rand_news->post_date))) . ' ' . date('Y', strtotime($row_rand_news->post_date)),
                'post_name' => $row_rand_news->post_name,
                'comment'   => count($row_rand_news->comment),
                'id'        => $row_rand_news->id,
                'urlName'   => url('/news/detail/'. $row_rand_news->post_name)
            ];
        }

        return response()->json([
            'content_news'   => $data_news,
            'random_news'    => $data_rand_news,
            'image_resource' => $img_source,
            'post_date'      => $post_date
        ],200);

        // return view('landingpage.detail_news',['content_news' => $data_news, 'random_news' => $data_rand_news, 'image_resource' => $img_source, 'post_date' => $post_date]);
    }

    private function randomNews() {
        $rand_news = wp4vPost::with('comment')
        ->where('post_type', 'post')
        ->inRandomOrder()
        ->limit(5)->get();

        return $rand_news;
    }

    public function commentNews(Request $request)
    {
        $data = wp4vComment::where('comment_post_ID', $request->comment_id)
        ->orderBy('comment_ID', 'desc')
        ->paginate(5);

        $data_count = wp4vComment::where('comment_post_ID', $request->comment_id)->count();
        $comments = [];
        if(!empty($data)) {
            foreach($data as $row_comment) {
                $comments[] = [
                    'id'           => $row_comment->comment_ID,
                    'author'       => $row_comment->comment_author,
                    'comment'      => $row_comment->comment_content,
                    'comment_date' => Carbon::parse($row_comment->comment_date)->diffForHumans(),

                ];
            }
        }
        return response()->json([
            // 'data'       => !empty($data) ? $comments : null,
            'data'       => [
                'total'        => $data->total(),
                'current_page' => $data->currentPage(),
                'last_page'    => $data->lastPage(),
                'next_page_url'=> $data->nextPageUrl(),
                'prev_page_url'=> $data->previousPageUrl(),
                'data'         => !empty($data) ? $comments : null
            ],
            'count_data' => $data_count
        ]);
    }

    public function storeCommentNews(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'email'    => 'required|email',
            'comment'  => 'required|string'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'code'    => 401,
                'success' => false,
                'message' => $validator->getMessageBag()->toArray()
            ],200);
        }else {
            wp4vComment::create([
                'comment_post_ID'      => $request->news_id,
                'comment_author'       => $request->username,
                'comment_author_email' => $request->email,
                'comment_author_url'   => 'kosong',
                'comment_author_IP'    => $request->client_ip,
                'comment_date'         => Carbon::now(),
                'comment_date_gmt'     => Carbon::now('UTC'),
                'comment_content'      => $request->comment,
                'comment_agent'        => $request->client_agent,
                'comment_type'         => 0
            ]);
            return response()->json([
                'code'    => 200,
                'success' => true,
                'message' => 'Berhasil menyimpan komentar'
            ],200);
        }
    }

    public function service($name)
    {
       $title = strtoupper(str_replace('-',' ', $name));
       return view('landingpage.service',['title' => $title]);
    }

    public function allGallery()
    {
        return view('landingpage.all_gallery',['galleries' => $this->resource()]);
    }

    private function getTextBetweenTags($string) {
        $pattern = '@src="([^"]+)"@';
        $a = preg_match($pattern, $string, $matches); // cek apakah ada attribut src dalam text
        return $a == 0 ? null : $matches[1];
    }

    private function convertMonth($month) {
        switch($month) {
            case 1:
                return 'Januari';
            break;
            case 2:
                return 'Februari';
            break;
            case 3:
                return 'Maret';
            break;
            case 4:
                return 'April';
            break;
            case 5:
                return 'Mei';
            break;
            case 6:
                return 'Juni';
            break;
            case 7:
                return 'Juli';
            break;
            case 8:
                return 'Agustus';
            break;
            case 9:
                return 'September';
            break;
            case 10:
                return 'Oktober';
            break;
            case 11:
                return 'November';
            break;
            case 12:
                return 'Desember';
            break;
            default:
                return 'Tidak terdefinisi';
        }
    }

    private function resourceLimitThree() {
        $data = $this->resource();
        $random_data = array_rand($data, 3);

        foreach($random_data as $key => $item) {
            $gallery[] = $data[$item];
        }
        return $gallery;
    }

    private function resource() {
        return [
            'TimePhoto_20200124_134004',
            'TimePhoto_20200124_134629',
            'TimePhoto_20200124_141034',
            'TimePhoto_20200205_151845-1',
            'TimePhoto_20200205_151845',
            'TimePhoto_20200205_151852',
            'TimePhoto_20200205_151942',
            'TimePhoto_20200205_152020',
            'TimePhoto_20200205_152833',
            'TimePhoto_20200205_153510',
            'TimePhoto_20200423_143624',
            'TimePhoto_20200423_145117',
            'TimePhoto_20200423_145650',
            'TimePhoto_20200423_152940',
            'TimePhoto_20200423_153007',
            'TimePhoto_20200423_153054',
            'TimePhoto_20200429_161049',
            'TimePhoto_20200429_161902',
            'TimePhoto_20200429_161950',
            'TimePhoto_20200429_162015',
            'TimePhoto_20200429_162529',
            'TimePhoto_20200429_165053',
            'TimePhoto_20200429_165555',
            'TimePhoto_20200616_111214-Copy',
            'TimePhoto_20200616_111214',
            'TimePhoto_20200616_113949-Copy',
            'TimePhoto_20200616_113949',
            'TimePhoto_20200616_114117-Copy',
            'TimePhoto_20200616_114117',
            'TimePhoto_20200616_115022-Copy',
            'TimePhoto_20200616_115022',
            'TimePhoto_20200616_115147',
            'TimePhoto_20200616_115213',
            'TimePhoto_20200616_120859',
            'TimePhoto_20200616_130037',
            'TimePhoto_20200707_101350',
            'TimePhoto_20200707_103548',
            'TimePhoto_20200707_103601',
            'TimePhoto_20200707_104134',
            'TimePhoto_20200707_110940',
            'TimePhoto_20200707_111712',
            'WhatsApp Image 2019-12-06 at 12.39.05',
            'WhatsApp Image 2019-12-06 at 12.39.08',
            'WhatsApp Image 2019-12-06 at 12.39.09(1)',
            'WhatsApp Image 2019-12-06 at 12.39.10(2)',
            'WhatsApp Image 2020-01-27 at 11.14.27 (1)',
            'WhatsApp Image 2020-01-27 at 11.14.29',
            'WhatsApp Image 2020-01-27 at 11.14.32'
        ];
    }
}
