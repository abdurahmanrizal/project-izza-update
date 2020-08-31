@extends('layouts.header')
@section('content')
    <style>
        .img-news {
            box-shadow: 5px 10px #888888
        }
        @media(max-width: 991.98px) {
            .img-news {
                box-shadow: none;
            }

            .post_date {
                font-size: 20px;
                font-weight: bold;
            }

            .title {
                font-size: 20px;
            }
        }
    </style>
    <div class="container p-4" id="all-news">
        <h3 class="font-weight_bold" style="border-left: 5px solid red"> <span class="ml-1">Kumpulan Seluruh Berita</span></h3>
        <div class="row mt-4">
            <div class="col-sm-12 col-lg-9">
                  <div class="card mb-3">
                        <div class="card-body" v-if="!data_news.length">
                            <p>Belum ada berita dimuat</p>
                        </div>
                        <div class="card-body" v-else="data_news.length" v-for="item_news in data_news">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img v-bind:src="item_news.content" :alt="item_news.title" class="img-fluid img-responsive" v-if="item_news.content != null">
                                    <img src="{{asset('img/svg_icon/camera.png')}}" class="img-fluid img-responsive" v-else="item_news.content == null">
                                </div>
                                <div class="col-lg-8 p-2">
                                    <small class="text-grey">@{{item_news.post_date}}</small>
                                    <h4 class="font-weight-bold mt-2">@{{item_news.title}}</h4>
                                    <br>
                                    <div v-if="item_news.comment != 0">
                                        <i class="fa fa-comments" style="font-size:20px !important"></i><small class="ml-1 mb-3" style="color:grey;" >@{{item_news.comment}} komentar</small>
                                    </div>
                                    <div v-else="item_news.comment == 0">
                                        <i class="fa fa-comments" style="font-size:20px !important"></i><small class="ml-1 mb-3" style="color:grey;">Belum ada komentar</small>
                                    </div>
                                    <br>
                                    <a :href="item_news.urlNews" class="font-weight-bold mt-2" style="color: red" target="_blank">Baca Berita</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                  </div>
                  <div class="pagination mt-3">
                    <button class="btn btn-primary" v-on:click="fetchPaginateNews(pagination.prev_page_url)" :disabled="!pagination.prev_page_url">
                        Previous
                    </button>
                    <span class="mt-2 ml-2">Page @{{pagination.current_page}} of @{{pagination.last_page}}</span>
                    <button class="btn btn-primary ml-3" v-on:click="fetchPaginateNews(pagination.next_page_url)" :disabled="!pagination.next_page_url">
                        Next
                    </button>
                  </div>
            </div>
            <div class="col-sm-12 col-lg-3">
                <div class="card" style="width: auto">
                    <div class="card-header font-weight-bold text-center">
                      Berita Populer
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" v-if="!data_random_news.length">
                            <p class="font-weight-bold">Belum ada berita</p>
                        </li>
                        <li class="list-group-item" v-else="data_random_news.length" v-for="news_random in data_random_news">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img :src="news_random.content" :alt="news_random.title" class="img-fluid img-responsive img-news" v-if="news_random.content != null">
                                    <img src="{{asset('img/svg_icon/camera.png')}}" :alt="news_random.title" class="img-fluid img-responsive img-news" v-else="news_random.content == null">
                                </div>
                                <div class="col-lg-8">
                                    <small class="text-grey post_date" style="font-size: 10px">@{{news_random.post_date}}</small>
                                    <p class="font-weight-bold mt-2 title" style="font-size:13px !important">@{{news_random.title}}</p>
                                    <a :href="news_random.urlNews" class="font-weight-bold mt-2" style="color: red; font-size:13px !important" target="_blank">Baca Berita</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        var allNews = new Vue({
            el: '#all-news',
            data: {
                url: "{{route('all.news')}}",
                data_news: [],
                pagination: [],
                data_random_news:[]
            },
            mounted() {
                this.getAllNews()
            },
            methods: {
                getAllNews: function() {
                    axios.get(this.url).then(res => {
                        this.data_news = res.data.data
                        this.pagination = res.data
                        this.data_random_news = res.data.data_random_news
                    })
                    .catch(err => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oopss..',
                            html: `Terjadi Kesalahan sistem dengan kode error <b>${err.response.status}</b> dengan pesan kesalahan <b>${err.response.statusText}</b>`,
                        })
                    })
                },
                makePagination: function(data) {
                    let pagination = {
                        current_page: data.current_page,
                        last_page: data.last_page,
                        next_page_url: data.next_page_url,
                        prev_page_url: data.prev_page_url
                    }

                    this.pagination = pagination
                },
                fetchPaginateNews: function(url) {
                    this.url = url
                    this.getAllNews()
                }
            }
        })
    </script>
@endsection
