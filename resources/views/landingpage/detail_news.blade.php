@extends('layouts.header')
@section('content')
    <style>
        .img-news {
            box-shadow: 5px 10px #888888
        }

        figure img {
            max-width: 100%;
            height: auto;
        }

        figcaption {
            text-align: center;
            margin-top: .5rem;
            color: grey;
            font-size: 13px;
        }
        p {
            text-align: justify;
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
            figure img {
                max-width: 100%;
                height: auto;
            }

            figcaption {
                text-align: center;
                margin-top: .5rem;
                color: grey;
                font-size: 13px;
            }
            p {
                text-align: justify;
                word-wrap: break-word;
            }
        }
    </style>
    <div class="container p-4" id="content-news">
        <h4 class="font-weight_bold" style="border-left: 5px solid #00a2ff"> <span class="ml-1"> Berita</span></h4>
        <div class="row mt-4">
            <div class="col-sm-12 col-lg-9">
                  <h3>@{{news_title}}</h3>
                  <input type="hidden" name="news_id" id="news_id" :value="news_id">
                  <small style="color:grey">@{{news_post_date}}</small>
                  <hr>
                  <div v-html="news_content">
                    {{-- {!!html_entity_decode($content_news['post_content'])!!} --}}
                  </div>
                  <br>
                  <h4 class="font-weight-bold" style="border-left: 5px solid #00a2ff">
                      <span class="ml-2"> @{{count_data_comment}} Komentar </span>
                  </h4>
                  <br>
                  <ul class="list-group">
                    <li class="list-group-item" v-if="!data_comment.length">
                        <span class="font-weight-bold">Belum ada Komentar</span>
                    </li>
                    <li class="list-group-item mb-2" v-else="data_comment.length" v-for="item in data_comment">
                        <span class="font-weight-bold">@{{item.author}}</span>
                        <br>
                        <span class="mt-3 text-justify" style="font-size: 15px">@{{item.comment}}</span>
                        <br>
                        <small style="color:grey">@{{item.comment_date}}</small>
                    </li>
                  </ul>
                  <div class="pagination mt-3" v-if="pagination.total > 5">
                        <button class="btn btn-primary" v-on:click="fetchPaginateUser(pagination.prev_page_url)" :disabled="!pagination.prev_page_url">
                            Previous
                        </button>
                        <span class="mt-2 ml-2">Page @{{pagination.current_page}} of @{{pagination.last_page}}</span>
                        <button class="btn btn-primary ml-3" v-on:click="fetchPaginateUser(pagination.next_page_url)" :disabled="!pagination.next_page_url">
                            Next
                        </button>
                  </div>

                  <br>
                  <h4 class="font-weight-bold" style="border-left: 5px solid green">
                    <span class="ml-2"> Tulis Komentar </span>
                  </h4>
                  <br>
                  <form>
                    <div class="form-group">
                      <label for="username">Nama <span style="color:red">*</span></label>
                      <input type="text" class="form-control" id="username" name="username" v-model="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span style="color:red">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" v-model="email" aria-describedby="emailHelp" required>
                        <small id="emailHelp" class="form-text text-muted">Email anda tidak akan  kami publikasikan</small>
                      </div>
                      <div class="form-group">
                        <label for="comment">Komentar <span style="color:red">*</span></label>
                        <textarea class="form-control" id="comment" rows="3" name="comment" v-model="comment" required></textarea>
                      </div>
                    <button type="button" class="btn btn-success" id="btn-comment" v-on:click="formComment" style="border-radius: 20px">Kirim Komentar</button>
                  </form>
            </div>
            <div class="col-sm-12 col-lg-3">
                <br>
                <br>
                <br>
                <br>
                <div class="card" style="width: auto">
                    <div class="card-header font-weight-bold text-center">
                      Berita Lain
                    </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" v-if="!data_random_news.length">
                                <p class="font-weight-bold"> Belum terdapat berita yang dimuat</p>

                            </li>
                            <li class="list-group-item" v-else="data_random_news.length" v-for="random_news in data_random_news">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <img :src="random_news.content" :alt="random_news.title" v-if="random_news.content != null" class="img-fluid img-responsive img-news">
                                        <img src="{{asset('img/svg_icon/camera.png')}}" :alt="random_news.title" v-else="random_news.content == null" class="img-fluid img-responsive img-news">
                                    </div>
                                    <div class="col-lg-8">
                                        <small class="text-grey post_date" style="font-size: 10px">@{{random_news.post_date}}</small>
                                        <p class="font-weight-bold mt-2 title" style="font-size:13px !important">@{{random_news.title}}</p>
                                        <a :href="random_news.urlName" class="font-weight-bold mt-2" style="color: red; font-size:13px !important" target="_blank">Baca Berita</a>
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
        // fungsi untuk validasi email
        function validateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        let currentUrl = "{{url()->current()}}";
        console.log(currentUrl)

        var contentNews = new Vue({
            el: '#content-news',
            data: {
                id: "",
                comment: "",
                count_data_comment: "",
                email: "",
                data_comment: [],
                data_random_news: [],
                username: "",
                url: "{{route('comment.news')}}",
                pagination: [],
                news_id: "",
                news_title: "",
                news_post_date:"",
                news_content:""
            },
            mounted() {
                this.getDataList(this.news_id)
                this.randomNewsList()
            },
            methods: {
                getDataList: function(id) {
                    axios.post(this.url,{
                        comment_id: id
                    }).then(res => {
                        this.data_comment = res.data.data.data
                        this.pagination = res.data.data
                        this.count_data_comment = res.data.count_data
                    })
                    .catch(err => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oopss..',
                            html: `Terjadi Kesalahan sistem dengan kode error <b>${err.response.status}</b> dengan pesan kesalahan <b>${err.response.statusText}</b>`,
                        })
                    })
                },
                randomNewsList: function() {
                    axios.post("{{route('data.detail.news')}}",{
                        current_url:currentUrl
                    })
                    .then(res => {
                        this.data_random_news = res.data.random_news
                        this.news_id = res.data.content_news.ID,
                        this.news_title = res.data.content_news.post_title,
                        this.news_post_date = res.data.post_date,
                        this.news_content = res.data.content_news.post_content,
                        this.getDataList(res.data.content_news.ID)
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
                fetchPaginateUser: function(url) {
                    this.url = url
                    this.getDataList(this.news_id)
                },
                formComment: function() {
                    let clientIP    = "{{Request::ip()}}"
                    let clientAgent = "{{Request::header('User-Agent')}}"
                    let username    = this.username
                    let email       = this.email
                    let comment     = this.comment
                    let newsID      = this.news_id
                    if(this.username != "" && this.email != "" && this.comment != "") {
                        if(validateEmail(email) === true) {
                            Swal.fire({
                                title: 'Proses',
                                html: 'Proses ini membutuhkan waktu beberapa saat',
                                timerProgressBar: true,
                                onBeforeOpen: () => {
                                    Swal.showLoading()
                                    axios.post("{{route('insert.comment.news')}}",{
                                        news_id: newsID,
                                        username: username,
                                        email:email,
                                        comment:comment,
                                        client_ip:clientIP,
                                        client_agent: clientAgent
                                    }).then(res => {
                                        this.getDataList(newsID)
                                        if(res.status === 200 && res.statusText === 'OK') {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Berhasil',
                                                text: `${res.data.message}`,
                                            })
                                            this.username = ""
                                            this.email = ""
                                            this.comment = ""
                                        }
                                    })
                                    .catch(err => {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oopss..',
                                            html: `Terjadi Kesalahan sistem dengan kode error <b>${err.response.status}</b> dengan pesan kesalahan <b>${err.response.statusText}</b>`,
                                        })
                                    })
                                },
                                onClose: () => {
                                    clearInterval(timerInterval)
                                }
                            }).then((result) => {
                                /* Read more about handling dismissals below */
                                if (result.dismiss === Swal.DismissReason.timer) {
                                    console.log('I was closed by the timer')
                                }
                            })
                        }else {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Oops..',
                                html: `Email tidak sesuai format`,
                            })
                        }

                    }else {
                        if(this.username == "") {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Oops..',
                                html: `Nama tidak boleh kosong`,
                            })
                        }else if(this.email == "") {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Oops..',
                                html: `Email tidak boleh kosong`,
                            })
                        }else if(this.comment == "") {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Oops..',
                                html: `Komentar tidak boleh kosong`,
                            })
                        }else {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Oops..',
                                html: `Data tidak boleh kosong`,
                            })
                        }
                    }
                }
            }
        })
    </script>
@endsection
