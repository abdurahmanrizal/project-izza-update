@extends('layouts.header')
@section('content')
    <style>
        .ol-helper li{
            list-style-type: decimal !important;
            margin-left: -.5rem !important;
        }
        .ul-helper li {
            list-style-type: square !important;
            margin-left: 2rem !important;
        }
        .section_title span {
            display: inline !important;
            color: black !important;
        }
    </style>
    <div class="about_us_area mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section_title mb-70">
                        <h3 class="mt-3 font-weight-bold wow fadeInUp mt-2 text-center" data-wow-duration="1.2s" data-wow-delay=".2s">Persyaratan Pendaftaran SLO</h3>
                        <br>
                        <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div style="border: 1px solid rgb(223, 7, 7); width:10%" class="ml-3" id="divider-naming-pt"></div>
                            <h4 class="p-3 font-weight-bold" id="naming-pt">Penjelasan Proses Sertifikasi</h4>
                            <p class="ml-3 text-justify" id="description-pt-one">
                                Berikut ini adalah Persyaratan Pendaftaran SLO sesuai Peraturan Menteri ESDM Nomor 38Tahun 2018.
                            </p>
                            <p class="mt-4">
                                <ol class="ol-helper">
                                    <li>Untuk mendapatkan Sertifikat Laik Operasi, pemilik Instalasi Pemanfaatan Tenaga Listrik Tegangan Rendah (450 – 197.000 VA)mengajukan permohonan kepada Lembaga Inspeksi Teknik Tegangan Rendah yang ditetapkan oleh Menteri dengan dilengkapi data sebagai berikut:a. identitas pemilik instalasi pemanfaatan tenaga listrik tegangan rendah</li>
                                        <ul class="ul-helper">
                                            <li>A. lokasi instalasi.</li>
                                            <li>B. Jenis dan kapasitas instalasi.</li>
                                            <li>C .Gambar instalasi yang dikeluarkan oleh badan usaha konsultan perencana tenaga listrik atau Direktur Jenderal.</li>
                                            <li>D. Peralatan yang dipasang.</li>
                                            <li><span class="font-weight-bold">NB:</span> Dalam hal tidak terdapat badan usaha jasa penunjang tenaga listrik bidang konsultansi perencana, gambar instalasi sebagaimana dimaksud pada huruf (d) dapat dikeluarkan oleh badan usaha jasa pembangunan dan pemasangan instalasi penyediaan tenaga listrik sebagai bagian dari pelaksanaan pembangunan dan pemasangan instalasi penyediaan tenaga listrik tegangan rendah tanpa dikenakan biaya gambar instalasi.</li>
                                        </ul>
                                    <li class="mt-3">Untuk mendapatkan Sertifikat Laik Operasi, pemegang Izin Usaha Penyediaan Tenaga Listrik (IUPTL), Pemilik Instalasi Pemanfaatan Tenaga Listrik Tegangan Tinggi dan Tegangan Menengah, dan Pemegang Izin Operasi (IO) mengajukan permohonan kepada Lembaga Inspeksi Teknik terakreditasi dengan dilengkapi data sebagai berikut :</li>
                                        <ul class="ul-helper">
                                            <li>A. Izin usaha penyediaan tenaga listrik, izin operasi, atau identitas pemilik instalasi pemanfaatan tenaga listrik tegangan tinggi dan tegangan menengah.</li>
                                            <li>B. Lokasi instalasi.</li>
                                            <li>C. Jenis dan kapasitas instalasi.</li>
                                            <li>D. Gambar instalasi dan tata letak yang dikeluarkan oleh badan usaha jasa konsultansi perencana tenaga listrik yang memiliki Izin Usaha Jasa Penunjang Tenaga Listrik.</li>
                                            <li>E. Diagram satu garis yang dikeluarkan oleh badan usaha jasa konsultansi perencana tenaga listrik yang memiliki Izin Usaha Jasa Penunjang Tenaga Listrik.</li>
                                            <li>F. Spesifikasi peralatan utama instalasi.</li>
                                            <li>G. Spesifikasi teknik dan standar yang digunakan.</li>
                                        </ul>
                                </ol>
                            </p>
                        </div>
                        <br>
                        <hr>
                        <div class="wow fadeInUp mb-70 mt-4" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div style="border: 1px solid rgb(223, 7, 7); width:10%" class="ml-3" id="divider-naming-pt"></div>
                            <h4 class="p-3 font-weight-bold" id="naming-pt">Prosedur Penerbitan SLO melalui LIT Penunjukan</h4>
                            <p class="ml-3 text-justify" id="description-pt-one">
                                Berikut ini adalah Persyaratan Pendaftaran SLO sesuai Peraturan Menteri ESDM Nomor 38Tahun 2018.
                            </p>
                            <p class="mt-4">
                                <ol class="ol-helper">
                                    <li>Calon pelanggan melakukan pendaftaran dengan cara menghubungi salah satu Lembaga Inspeksi Teknik sesuai dengan jenis instalasi milik pelanggan pada daftar <a href="https://slodjk.esdm.go.id/lit" target="_blank" style="color: green">Lembaga Inspeksi Teknik</a>.</li>
                                    <li>
                                        Lembaga Inspeksi Teknik kemudian melakukan pemeriksaan dan pengujian instalasi milik pelanggan sesuai mata uji pada <a href="https://slodjk.esdm.go.id/halaman/peraturan-terkait-slo" target="_blank" style="color: green">Permen ESDM Nomor 38 tahun 2018</a> tentang Tata Cara Akreditasi dan Sertifikasi Ketenagalistrikan
                                    </li>
                                    <li>Jika Instalasi milik pelanggan dinyatakan Laik Operasi berdasarkan hasil pemeriksaan dan pengujian oleh Lembaga Inspeksi Teknik, maka SLO akan diterbitkan setelah mendapatkan nomor Register dari Direktorat Jenderal Ketenagalistrikan.</li>
                                </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
