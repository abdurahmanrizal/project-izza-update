@extends('layouts.header')
@section('content')
    <style>
        .ol-helper {
            margin-left: -1.5rem !important;
            margin-top: 1rem !important;
        }
        .ol-helper li {
            list-style-type:lower-alpha !important;
        }
        @media(max-width: 768px) {
            h2 {
                text-align: center !important;
            }
        }
    </style>
    <div class="container p-3 mt-3">
        <div class="p-4">
            <div class="row">
                @switch($title)
                    @case(strtoupper('Instalasi Distribusi Tenaga Listrik Tegangan Rendah'))
                        <div class="col-lg-12 col-md-12">
                            <h2 class="font-weight-bold" style="color: #1ea1f1" style="max-width: 100%">{{$title}}</h2>
                        </div>
                        <div class="col-lg-3 col-md-12 mt-3">
                            <img src="{{asset('img/svg_icon/fuse-box.png')}}" alt="icon-Distribusi-Tenaga-Listrik-Tegangan-Rendah" class="img-fluid img-responsive d-block mx-auto">
                        </div>
                        <div class="col-lg-9 col-md-12 text-justify mt-3">
                            Yaitu jaringan distribusi dari gardu distribusi untuk di salurkan ke pelanggan dengan klasifikasi tegangan rendah yaitu 220 V atau 380 V (antar fasa). Pelanggan yang memakai tegangan rendah ini adalah pelanggan paling banyak karena daya yang dipakai tidak terlalu banyak. Jaringan dari gardu distribusi dikenal dengan JTR (Jaringan Tegangan Rendah), lalu dari JTR dibagi-bagi untuk ke rumah pelanggan, saluran yang masuk dari JTR ke rumah pelanggan disebut Sambungan Rumah (SR). Pelanggan tegangan ini banyaknya menggunakan listrik satu fasa, walau ada beberapa memakai listrik tiga fasa.
                            <br>
                            Pemeriksaan dan Pengujian instalasi ini meliputi:
                            <ol class="ol-helper">
                                <li>Transformator dan Aksesorisnya</li>
                                <li>Konstruksi Jaringan</li>
                                <li>Kabel Penghantar</li>
                                <li>Peralatan Proteksi</li>
                                <li>PHB TR</li>
                                <li>Sistem Pembumian</li>
                            </ol>
                        </div>
                        @break
                    @case(strtoupper('Instalasi Distribusi Tenaga Listrik Tegangan Menengah'))
                        <div class="col-lg-12 col-md-12">
                            <h2 class="font-weight-bold" style="color: #1ea1f1" style="max-width: 100%">{{$title}}</h2>
                        </div>
                        <div class="col-lg-3 col-md-12 mt-3">
                            <img src="{{asset('img/svg_icon/electricity.png')}}" alt="icon-Distribusi-Tenaga-Listrik-Tegangan-Menengah" class="img-fluid img-responsive d-block mx-auto">
                        </div>
                        <div class="col-lg-9 col-md-12 text-justify mt-3">
                            Yaitu jaringan distribusi dari gardu distribusi untuk di salurkan ke pelanggan dengan klasifikasi tegangan rendah yaitu 220 V atau 380 V (antar fasa). Pelanggan yang memakai tegangan rendah ini adalah pelanggan paling banyak karena daya yang dipakai tidak terlalu banyak. Jaringan dari gardu distribusi dikenal dengan JTR (Jaringan Tegangan Rendah), lalu dari JTR dibagi-bagi untuk ke rumah pelanggan, saluran yang masuk dari JTR ke rumah pelanggan disebut Sambungan Rumah (SR). Pelanggan tegangan ini banyaknya menggunakan listrik satu fasa, walau ada beberapa memakai listrik tiga fasa.
                            <br>
                            Pemeriksaan dan Pengujian instalasi ini meliputi:
                            <ol class="ol-helper">
                                <li>Komponen Switching dan Aksesorisnya</li>
                                <li>Konstruksi Jaringan</li>
                                <li>Tranformator distribusi dan Aksesoriesnya</li>
                                <li>Peralatan Proteksi</li>
                                <li>Kabel Penghantar</li>
                                <li>Sistem Pembumian</li>
                            </ol>
                        </div>
                        @break
                    @case(strtoupper('Instalasi Tenaga Listrik Pemanfaatan Tegangan Menengah'))
                        <div class="col-lg-12 col-md-12">
                            <h2 class="font-weight-bold" style="color: #1ea1f1" style="max-width: 100%">{{$title}}</h2>
                        </div>
                        <div class="col-lg-3 col-md-12 mt-3">
                            <img src="{{asset('img/svg_icon/power.png')}}" alt="icon-Tenaga Listrik-Pemanfaatan-Tegangan-Menengah" class="img-fluid img-responsive d-block mx-auto">
                        </div>
                        <div class="col-lg-9 col-md-12 text-justify mt-3">
                            Instalasi Pemanfaatan Tenaga Listrik Tegangan Menengah adalah instalasi tenaga listrik yang digunakan untuk pemanfaatan tenaga listrik oleh konsumen akhir.
                            <br>
                            Pemeriksaan dan Pengujian instalasi ini meliputi:
                            <ol class="ol-helper">
                                <li>Kabel Penghantar (SKTM / SKUTM, SUTM)</li>
                                <li>Cubickle TM (PHB TM)</li>
                                <li>Sistem Proteksi</li>
                                <li>Panel LVMDP (PHB TR)</li>
                                <li>Sistem Pembumian</li>
                            </ol>
                        </div>
                        @break
                    @case(strtoupper('Instalasi Pembangkit Listrik Tenaga Disel'))
                        <div class="col-lg-12 col-md-12">
                            <h2 class="font-weight-bold" style="color: #1ea1f1" style="max-width: 100%">{{$title}}</h2>
                        </div>

                        <div class="col-lg-3 col-md-12 mt-3">
                            <img src="{{asset('img/svg_icon/piston.png')}}" alt="icon-Pembangkit-Listrik-Tenaga-Disel" class="img-fluid img-responsive d-block mx-auto">
                        </div>
                        <div class="col-lg-9 col-md-12 text-justify mt-3">
                            Pembangkit Listrik Tenaga Diesel (PLTD) adalah Pembangkit listrik yang menggunakan mesin diesel sebagai penggerak awal. mesin diesel ini berfungsi untuk menghasilkan energi mekanis yang diperlukan untuk memutar rotor generator, dimana generator ini yang akan mengasilkan energy listrik.
                            <br>
                            Pemeriksaan dan Pengujian instalasi ini meliputi:
                            <ol class="ol-helper">
                                <li>Mesin Diesel lengkap dengan spesifikasinya</li>
                                <li>Generator lengkap dengan spesifikasinya</li>
                                <li>Sistem Proteksi</li>
                                <li>Sistem pembumian</li>
                                <li>Pengujian emisi gas buang</li>
                                <li>Pengujian Pembebanan dan kehandalan sistem</li>
                                <li>
                                    Pemeriksaan dokumen lingkungan (AMDAL / SPPL / UKL / UPL)
                                </li>
                            </ol>
                        </div>
                        @break
                    @case(strtoupper('Instalasi Pembangkit Listrik Tenaga Baru Terbarukan'))
                        <div class="col-lg-12 col-md-12">
                            <h2 class="font-weight-bold" style="color: #1ea1f1" style="max-width: 100%">{{$title}}</h2>
                        </div>
                        <div class="col-lg-3 col-md-12 mt-3">
                            <img src="{{asset('img/svg_icon/solar-panel.png')}}" alt="icon-Pembangkit-Listrik-Tenaga-Baru-Terbarukan" class="img-fluid img-responsive d-block mx-auto">
                        </div>
                        <div class="col-lg-9 col-md-12 text-justify mt-3">
                            Pembangkit Listrik Tenaga Energi Baru dan Terbarukan yang dimaksud dalam hal ini adalah Pembangkit Listrik yang berkonsentrasi ke Pembangkit Listrik Tenaga Surya atau disingkat PLTS, yaitu pembangkit listrik yang mengubah energi surya menjadi energi listrik.
                            <br>
                            Pemeriksaan dan Pengujian instalasi ini meliputi:
                            <ol class="ol-helper">
                                <li>Panel Surya lengkap dengan spesifikasinya</li>
                                <li>Peralatan Kontrol lengkap dengan spesifikasinya</li>
                                <li>Sistem Proteksi</li>
                                <li>Pengujian Pembebanan dan kehandalan sistem</>
                                <li>Sistem Pembumian</li>
                            </ol>
                        </div>
                       @break
                    @default
                        <h1 class="font-weight-bold d-block mx-auto" style="color: #1ea1f1">Layanan Belum Tersedia</h1>
                        <div class="col-lg-12 col-md-12">
                            <img src="{{asset('img/svg_icon/404.png')}}" alt="404" class="d-block mx-auto img-fluid img-responsive" style="width: 500px">
                            <br>
                            <a href="{{route('dashboard')}}" class="btn btn-success d-block mx-auto" style="width: 25%">Kembali ke halaman depan</a>
                        </div>
                @endswitch

            </div>
        </div>

    </div>

@endsection
