@extends('layouts.header')
@section('content')
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
                            SLO pemenfaat Instalasi listrik tegangan rendah  meliputi pemeriksaan jaringan pemanfaat dan distribusi jaringan tegangan rendah yang diperiksa meliputi:
                            <br>
                            <br>
                            1. Konstruksi.
                            <br>
                            2. Kabel & aksesoris jaringan tegangan rendah.
                            <br>
                            3. Papan hubung bagu (phb) / panel dan aksesorisnya jaringan tegangan rendah.
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
                            SLO pemenfaat Instalasi listrik tegangan menengah meliputi pemeriksaan pemanfaat dan distribusi jaringan tegangan menengah yang diperiksa meliputi:
                            <br>
                            1. konstruksi
                            <br>
                            2. Kabel & aksesoris
                            <br>
                            3. Trafo dan aksesorisnya
                            <br>
                            4. Kubikel dan aksesorisnya.
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
                            SLO pemenfaat Instalasi listrik pemanfaatan tegangan menengah meliputi pemeriksaan pemanfaat dan distribusi jaringan tegangan menengah yang diperiksa meliputi:
                            <br>
                            1. Konstruksi
                            <br>
                            2. Kabel & aksesoris
                            <br>
                            3. Trafo dan aksesorisnya
                            <br>
                            4. Kubikel dan aksesorisnya.
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
                            Slo pemeriksaan yang meliputi ganset rumah ganset panel distribusi geset dan aksesorisnya.
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
                            SLO pemeriksaan yang meliputi panel surya kontroler baterai dan aksesorisnya.
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
