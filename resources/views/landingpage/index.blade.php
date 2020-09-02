@extends('layouts.header')
@section('content')
    <!-- Section Produk dan layanan   -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-70">
                        <h3 class="wow fadeInUp font-weight-bold" data-wow-duration="1.2s" data-wow-delay=".2s">Layanan</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="single_service text-center wow fadeInLeft product-service" data-wow-duration="1.2s" data-wow-delay=".4s" id="product-service">
                        <div class="icon">
                            <img src="{{asset('img/svg_icon/fuse-box.png')}}" alt="icon-Distribusi-Tenaga-Listrik-Tegangan-Rendah" class="img-fluid img-responsive" width="62">
                        </div>
                        <p class="mt-3 font-weight-bold">Instalasi Distribusi Tenaga Listrik Tegangan Rendah</p>
                        <a href="{{url('/service/instalasi-distribusi-tenaga-listrik-tegangan-rendah')}}" class="btn btn-success btn-sm mt-3" target="_blank">Lihat Lebih</a>
                    </div>
                </div>
                <div class="col">
                    <div class="single_service text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" id="product-service">
                        <div class="icon">
                            <img src="{{asset('img/svg_icon/electricity.png')}}" alt="icon-Distribusi-Tenaga-Listrik-Tegangan-Menengah" class="img-fluid img-responsive" width="62">
                        </div>
                        <p class="mt-3 font-weight-bold">Instalasi Distribusi Tenaga Listrik Tegangan Menengah</p>
                        <a href="{{url('/service/instalasi-distribusi-tenaga-listrik-tegangan-menengah')}}" class="btn btn-success btn-sm mt-3" target="_blank">Lihat Lebih</a>
                    </div>
                </div>
                <div class="col">
                    <div class="single_service text-center wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".4s" id="product-service">
                        <div class="icon">
                            <img src="{{asset('img/svg_icon/power.png')}}" alt="icon-Tenaga Listrik-Tegangan-Menengah" class="img-fluid img-responsive" width="62">
                        </div>
                        <p class="mt-3 font-weight-bold">
                            Instalasi Tenaga Listrik Pemanfaatan Tegangan Menengah
                        </p>
                        <a href="{{url('/service/instalasi-tenaga-listrik-pemanfaatan-tegangan-menengah')}}" class="btn btn-success btn-sm mt-3" target="_blank">Lihat Lebih</a>
                    </div>
                </div>
                <div class="col">
                    <div class="single_service text-center wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".4s" id="product-service">
                        <div class="icon">
                            <img src="{{asset('img/svg_icon/piston.png')}}" alt="icon-Pembangkit-Listrik-Tenaga-Disel" class="img-fluid img-responsive" width="62">
                        </div>
                        <p class="mt-3 font-weight-bold">Instalasi Pembangkit Listrik Tenaga Diesel</p>
                        <a href="{{url('/service/instalasi-pembangkit-listrik-tenaga-diesel')}}" class="btn btn-success btn-sm mt-3" style="margin-top:2.8rem !important" target="_blank">Lihat Lebih</a>
                    </div>
                </div>
                <div class="col">
                    <div class="single_service text-center wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".4s" id="product-service">
                        <div class="icon">
                            <img src="{{asset('img/svg_icon/solar-panel.png')}}" alt="icon-Pembangkit-Listrik-Tenaga-Baru-Terbarukan" class="img-fluid img-responsive" width="62">
                        </div>
                        <p class="mt-3 font-weight-bold">Instalasi Pembangkit Listrik Tenaga Energi Baru dan Terbarukan</p>
                        <a href="{{url('/service/instalasi-pembangkit-listrik-tenaga-energi-baru-dan-terbarukan')}}" class="btn btn-success btn-sm mt-3" target="_blank">Lihat Lebih</a>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="btn-services d-block mx-auto">
                    <a class="boxed-btn-pendaftaran wow fadeInLeft ml-2"  data-wow-duration="1s" data-wow-delay=".2s" @click="pendaftaranSlo">Pendaftaran SLO</a>
                    <a class="boxed-btn-verifikasi wow fadeInLeft ml-2"  data-wow-duration="1s" data-wow-delay=".2s" href="#" @click="verificationSlo">Verifikasi SLO</a>
                    <a class="boxed-btn-cek-status wow fadeInLeft ml-2 btn-danger"  data-wow-duration="1s" data-wow-delay=".2s" href="#" @click="statusSlo">Cek Status SLO</a>
                </div>
            </div>
        </div>
        {{-- modal instalasi distribusi tegangan rendah --}}
        {{-- <div class="modal modal-product-service" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="title-product-service">@{{title_product_service}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p class="content-body text-justify">@{{content_body}}</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
            </div>
        </div> --}}
    </div>
    <!--/ end section produk dan layanan  -->

    <div class="about_area" id="about-us">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-5 offset-lg-1">
                    <div class="about_info">
                        <div class="section_title">
                            <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" id="about-us">Tentang Kami</span>
                            <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s" id="about-izza-elektrika">APA ITU IZZA ELEKTRIKA INSPEKSI SOLUSINDO?</h3>
                            <p class="mid_text wow fadeInUp text-justify" data-wow-duration="1s" data-wow-delay=".5s">
                                Perusahaan yang bergerak di bidang jasa inspeksi teknik ketenagalistrikan yang telah
                                mendapat penunjukan dari Deriktorat Jendral Ketenaga Listrikan, Kementrian ESDM. Dengan
                                tenaga ahli yang sudah mempunyai penunjukan dari Kementrian ESDM, serta berpengalaman
                                dibidang inspeksi teknik ketenagalistrikan.
                            </p>
                            <p class="mid_text wow fadeInUp text-justify" data-wow-duration="1s" data-wow-delay=".5s">
                                Hingga kini pelanggan PT. IZZA ELEKTRIKA INSPEKSI  adalah dari berbagai sektor industri seperti ( PLTD, PLTMH, RSUD, PERTAMINA, HOTEL, FACTORY, RUMAH SAKIT SWASTA DLL)
                            </p>
                            <br>
                            <button type="button" class="boxed-btn3 wow fadeInLeft mt-2" @click='showMore'>Lihat Lebih</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- visi - misi perusahaan  --}}
    <div class="how_we_work_area" id="visi-misi">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="work_info">
                        <div class="section_title">
                            <h3 class="wow fadeInLeft font-weight-bold text-light" data-wow-duration="1s" data-wow-delay=".3s">Visi dan Misi</h3>
                            <p class="mid_text wow fadeInLeft font-weight-bold text-light" data-wow-duration="1s" data-wow-delay=".4s">Visi</p>
                            <p class="last_p wow fadeInRight text-light" data-wow-duration="1s" data-wow-delay=".5s">Melalui Sertifikasi Laik Operasi kita tingkatkan kualitas dan keamanan Instalasi Listrik.</p>
                            <br>
                            <p class="mid_text wow fadeInLeft font-weight-bold text-light" data-wow-duration="1s" data-wow-delay=".4s">Misi</p>
                            <p class="last_p wow fadeInRight text-light" data-wow-duration="1s" data-wow-delay=".5s">Melaksanakan pemeriksaan instalasi listrik secara tepat, cepat dan akurat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- akhir section visi - misi perusahaan --}}

    <!-- portfolio_image_area  -->
    <div class="portfolio_image_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-90">
                        <h3 class="wow fadeInUp font-weight-bold" data-wow-duration="1s" data-wow-delay=".3s">Berita</h3>
                        {{-- <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Tour function information without cross action media value quickly maximize timely deliverables.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($contents as $key => $content)
                    @if (count($contents) <= 3)
                        @if ($key == 0)
                        <div class="col-lg-8 col-md-12">
                            <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                <div class="portfolio_thumb">
                                    @if ($content['content'] != null)
                                        <img src="{{$content['content']}}" alt="{{$content['title']}}">
                                    @else
                                        <img src="https://izzainspeksindo.com/wp-content/uploads/2019/12/Jasa-Inspeksi-Teknik-Instalasi-Distribusi-Tenaga-Listrik-Tegangan-Rendah.jpeg" alt="">
                                    @endif

                                </div>
                                <div class="portfolio_hover">
                                    <div class="title">
                                        <span>Berita</span>
                                        <h3>{{$content['title']}}</h3>
                                        <a class="boxed-btn3" href="{{url('/news/detail/'.$content['post_name'])}}" target="_blank">Baca Berita</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif($key == 1)
                        <div class="col-lg-4 col-md-12">
                            <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                <div class="portfolio_thumb">
                                    @if ($content['content'] != null)
                                        <img src="{{$content['content']}}" alt="{{$content['title']}}">
                                    @else
                                        <img src="https://izzainspeksindo.com/wp-content/uploads/2019/12/Jasa-Inspeksi-Teknik-Instalasi-Distribusi-Tenaga-Listrik-Tegangan-Rendah.jpeg" alt="">
                                    @endif

                                </div>
                                <div class="portfolio_hover">
                                    <div class="title">
                                        <span>Berita</span>
                                        <h3>{{$content['title']}}</h3>
                                        <a class="boxed-btn3" href="{{url('/news/detail/'.$content['post_name'])}}" target="_blank">Baca Berita</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-lg-12 col-md-12">
                            <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                <div class="portfolio_thumb">
                                    @if ($content['content'] != null)
                                        <img src="{{$content['content']}}" alt="{{$content['title']}}">
                                    @else
                                        <img src="https://izzainspeksindo.com/wp-content/uploads/2019/12/Jasa-Inspeksi-Teknik-Instalasi-Distribusi-Tenaga-Listrik-Tegangan-Rendah.jpeg" alt="">
                                    @endif

                                </div>
                                <div class="portfolio_hover">
                                    <div class="title">
                                        <span>Berita</span>
                                        <h3>{{$content['title']}}</h3>
                                        <a class="boxed-btn3" href="{{url('/news/detail/'.$content['post_name'])}}" target="_blank">Baca Berita</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @else
                        @if($key == 0)
                        <div class="col-lg-8 col-md-12">
                            <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                <div class="portfolio_thumb">
                                    @if ($content['content'] != null)
                                        <img src="{{$content['content']}}" alt="{{$content['title']}}">
                                    @else
                                        <img src="https://izzainspeksindo.com/wp-content/uploads/2019/12/Jasa-Inspeksi-Teknik-Instalasi-Distribusi-Tenaga-Listrik-Tegangan-Rendah.jpeg" alt="">
                                    @endif

                                </div>
                                <div class="portfolio_hover">
                                    <div class="title">
                                        <span>Berita</span>
                                        <h3>{{$content['title']}}</h3>
                                        <a class="boxed-btn3" href="{{url('/news/detail/'.$content['post_name'])}}" target="_blank">Baca Berita</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-lg-4 col-md-12">
                            <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                <div class="portfolio_thumb">
                                    @if ($content['content'] != null)
                                        <img src="{{$content['content']}}" alt="{{$content['title']}}">
                                    @else
                                        <img src="https://izzainspeksindo.com/wp-content/uploads/2019/12/Jasa-Inspeksi-Teknik-Instalasi-Distribusi-Tenaga-Listrik-Tegangan-Rendah.jpeg" alt="">
                                    @endif

                                </div>
                                <div class="portfolio_hover">
                                    <div class="title">
                                        <span>Berita</span>
                                        <h3>{{$content['title']}}</h3>
                                        <a class="boxed-btn3" href="{{url('/news/detail/'.$content['post_name'])}}" target="_blank">Baca Berita</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endif
                @endforeach
                <button type="button" class="btn btn-success mx-auto" style="border-radius:30px" v-on:click="allNews()">Lihat Seluruh Berita</button>
            </div>
        </div>
    </div>
    <!--/ portfolio_image_area  -->

    <div class="how_we_work_area mb-1 gallery-we-work" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="work_info">
                        <div class="section_title">
                            <h3 class="wow fadeInLeft font-weight-bold" data-wow-duration="1s" data-wow-delay=".3s" id="galerry">Galeri</h3>
                            <div class="card shadow" style="">
                                <div class="card-body">
                                    <div class="portfolio_image_area" style="padding-top:0; padding-bottom:0">
                                        <div class="row">
                                            {{-- {{dd($gallery)}} --}}
                                            @foreach ($gallery as $item_gallery)
                                                @if ($loop->first)
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                                            <div class="portfolio_thumb" style="height:auto" >
                                                                <img src="{{asset('img/gallery'.'/'.$item_gallery)}}.jpg" alt="{{$item_gallery}}" class="img-responsive w-100"  height="200">
                                                            </div>
                                                            <div class="portfolio_hover">
                                                                <div class="title" id="title-gallery" @click="clickImage('{{$item_gallery}}')">
                                                                    <h3>PT.IZZA INSPEKINDO</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @elseif($loop->last)
                                                    <div class="col-lg-12 col-md-12">
                                                        <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" style="margin-top: -1rem !important">
                                                            <div class="portfolio_thumb" id="portfolio-galler-2">
                                                                <img src="{{asset('img/gallery'.'/'.$item_gallery)}}.jpg" alt="{{$item_gallery}}" class="img-responsive w-100">
                                                            </div>
                                                            <div class="portfolio_hover">
                                                                <div class="title" id="title-gallery" @click="clickImage('{{$item_gallery}}')">
                                                                    <h3>PT.IZZA INSPEKINDO</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="col-lg-6 col-md-12">
                                                        <div class="single_Portfolio wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                                            <div class="portfolio_thumb" id="portfolio-gallery">
                                                                <img src="{{asset('img/gallery'.'/'.$item_gallery)}}.jpg" alt="{{$item_gallery}}" class="img-responsive w-100">
                                                            </div>
                                                            <div class="portfolio_hover">
                                                                <div class="title" id="title-gallery" @click="clickImage('{{$item_gallery}}')">
                                                                    <h5>PT.IZZA INSPEKINDO</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                            <button type="button" class="btn btn-success mx-auto" @click="showGallery">Lihat Galeri</button>
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modal-image" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Preview Gambar</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                       <div id="img-resource">

                       </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var vueAboutUs = new Vue({
            el: '#about-us',
            methods: {
                showMore: function() {
                    window.open("{{route('about')}}","_blank")
                }
            }
        })

        var vueProductService = new Vue({
            el:'.service_area',
            data: {
                title_product_service: '',
                content_body: ''
            },
            methods: {
                pendaftaranSlo: function(e) {
                    e.preventDefault()
                    $('.modal-penawaran').modal('show')
                },
                verificationSlo: function(e) {
                    e.preventDefault()
                    window.open('https://slodjk.esdm.go.id/verifikasi', '_blank')
                },
                statusSlo: function(e) {
                    e.preventDefault()
                    window.open('https://slodjk.esdm.go.id/pendaftaran/status', '_blank')
                },
                showMoreService: function(text) {
                    switch(text) {
                        case 'Instalasi Distribusi Tenaga Listrik Tegangan Rendah':
                            this.title_product_service = text
                            this.content_body = `SLO pemenfaat Instalasi listrik tegangan rendah  meliputi pemeriksaan jaringan pemanfaat dan distribusi jaringan tegangan rendah yang diperiksa meliputi: ${'\n'}
                                                 1. Konstruksi
                                                 2. Kabel & aksesoris jaringan tegangan rendah
                                                 3. Papan hubung bagu (phb) / panel dan aksesorisnya jaringan tegangan rendah.`

                        break;
                        case 'Instalasi Distribusi Tenaga Listrik Tegangan Menengah':
                            this.title_product_service = text
                            this.content_body = `SLO pemenfaat Instalasi listrik tegangan menengah meliputi pemeriksaan pemanfaat dan distribusi jaringan tegangan menengah yang diperiksa meliputi:
                                                    1. konstruksi
                                                    2. Kabel & aksesoris
                                                    3. Trafo dan aksesorisnya
                                                    4. Kubikel dan aksesorisnya.`

                        break;
                        case 'Instalasi Tenaga Listrik Tegangan Menengah':
                            this.title_product_service = text
                            this.content_body = `SLO pemenfaat Instalasi listrik pemanfaatan tegangan menengah meliputi pemeriksaan pemanfaat dan distribusi jaringan tegangan menengah yang diperiksa meliputi:
                                                    1. Konstruksi
                                                    2. Kabel & aksesoris
                                                    3. Trafo dan aksesorisnya
                                                    4. Kubikel dan aksesorisnya.`

                        break;
                        case 'Instalasi Pembangkit Listrik Tenaga Disel':
                            this.title_product_service = text
                            this.content_body = `Slo pemeriksaan yang meliputi ganset rumah ganset panel distribusi geset dan aksesorisnya.`
                        break;
                        case 'Instalasi Pembangkit Listrik Tenaga Baru Terbarukan':
                            this.title_product_service = text
                            this.content_body = `SLO pemeriksaan yang meliputi panel surya kontroler baterai dan aksesorisnya.`
                        break;
                        default:
                            this.title_product_service = `<b>Modal Title</br>`
                            this.content_body = `Modal Body`
                    }
                    $('.modal-product-service').modal('show')
                }

            }
        })
        var news = new Vue({
            el: '.portfolio_image_area',
            methods: {
                allNews: function() {
                    window.open("{{route('view.all.news')}}","_blank")
                }
            }
        })

        var gallery = new Vue({
            el: '#gallery',
            methods: {
                showGallery: function() {
                   window.open("{{route('view.all.gallery')}}","_blank")
                },
                clickImage: function(resourceImg) {
                    let resource = "{{asset('img/gallery'.'/'.':img')}}.jpg"
                    resource = resource.replace(':img', resourceImg)
                    $('#img-resource').html(`
                        <img src="${resource}" class="img-responsive w-100" style="height:500px">
                    `)
                    $('#modal-image').modal('show')
                }
            }
        })
    </script>
@endsection
