@extends('layouts.header')
@section('content')
    <style>
        .ol-helper li {
            list-style-type: decimal !important;
            margin-left: -1.5rem !important;
            line-height: 2rem;
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
    <div class="container mt-3 p-3">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2 class="font-weight-bold text-center">Proses Sertifikasi</h2>
            </div>
            <div class="d-block mx-auto" style="width:10%; border-top: 3px solid #dd4f65" ></div>
            <div class="section_title mb-70 justify-content-center mt-3 mb-4">
                <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                    <div style="border: 1px solid rgb(177, 5, 177); width:10%" class="ml-3" id="sambutan-direktur-divider"></div>
                    <h4 class="p-3 font-weight-bold" id="sambutan-direktur-title">ALUR PROSES SERTIFIKASI</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 ml-3">
                            <p class="text-justify">
                                Setiap pekerjaan pastilah memiliki suatu alur/prosedur. Diagram alur dari proses Sertifikasi Laik Operasi di PT. Izza Elektrika Inspeksi Solusindo.
                            </p>
                            <br>
                            <img src="https://izzainspeksindo.com/wp-content/uploads/2019/12/Bagaimana-mengajukan-SLO.jpg" class="img-fluid img-responsive d-block mx-auto">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>
            <div class="section_title mb-70 justify-content-center mt-3 mb-4">
                <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                    <div style="border: 1px solid rgb(177, 5, 177); width:10%" class="ml-3" id="sambutan-direktur-divider"></div>
                    <h4 class="p-3 font-weight-bold" id="sambutan-direktur-title">Penjelasan Proses Sertifikasi</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 ml-3">
                            <p class="text-justify">
                                Berikut adalah standar pelayanan PT. Izza Elektrika Inspeksi Solusindo dalam pelayanan dari awal permohonan hingga Sertifikat Laik Operasi diterima oleh pelanggan :
                            </p>
                            <p>
                                <ol class="ol-helper">
                                    <li>
                                        Pemilik instalasi membuat permohonan Sertifikat Laik Operasi melalui surat resmi yang dikeluarkan oleh pemilik instalasi tersebut.
                                    </li>
                                    <li>
                                        LIT yang ditunjuk melakukan pemeriksaaan kelengkapan dokumen permohonan.
                                    </li>
                                    <li>
                                        Jika dokumen tidak lengkap, pemilik instalasi harus segera melengkapi berkasnya agar proses permohonan segera diproses.
                                    </li>
                                    <li>
                                        Jika dokumen sudah lengkap maka LIT yang ditunjuk melakukan uji laik
                                    </li>
                                    <li>
                                        Apabila dinyatakan belum lulus evaluasi maka pemilik instlasi harus melakukan perbaikan instalasi.
                                    </li>
                                    <li>
                                        Dan jika telah lulus evaluasi maka LIT yang ditunjuk membuat laporan hasil pemeriksaan dan pengujian.
                                    </li>
                                    <li>
                                        LIT yang ditunjuk mengajukan permohonan penerbitan Sertifikat Laik Operasi Online di situs <a href="https://slodjk.esdm.go.id/" target="_blank" style="color:green">https://slodjk.esdm.go.id/</a>
                                    </li>
                                    <li>
                                        Jika permohonan tidak valid maka harus dipenuhi apa saja kekurangan dalam pemenuhan proses penerbitan Sertifikat Laik Operasi tersebut di laman Sertifikat Laik Operasi online tersebut diatas sehingga prosesnya dapat diproses kembali.
                                    </li>
                                    <li>
                                        Dan jika permohonan telah valid, maka pemerintah akan melakukan registrasi Sertifikat Laik Operasi.
                                    </li>
                                    <li>
                                        Selanjutnya pemerintah akan menerbitkan Sertifikat Laik Operasi tersebut.
                                    </li>
                                    <li>
                                        Setelah Sertifikat Laik Operasi telah cetak, maka LIT yang ditunjuk memberikan Sertifikat Laik Operasi tersebut kepada pemilik instalasi.
                                    </li>
                                    <li>
                                        Dan jika sudah diterima pemilik instalasi mengkonfirmasi Sertifikat Laik Operasi sudah diterima.
                                    </li>
                                </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>
            <div class="section_title mb-70 justify-content-center mt-3 mb-4">
                <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                    <div style="border: 1px solid rgb(177, 5, 177); width:10%" class="ml-3" id="sambutan-direktur-divider"></div>
                    <h4 class="p-3 font-weight-bold" id="sambutan-direktur-title">PENANGGUNG JAWAB PROSES</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 ml-3">
                            <p class="text-justify">
                                Penanggungjawab proses sertifikasi adalah Penanggungjawab Teknik serta bagian administrasi di bagian pembuatan laporan ke Direktorat Jenderal Ketenagalistrikan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>
            <div class="section_title mb-70 justify-content-center mt-3 mb-4">
                <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                    <div style="border: 1px solid rgb(177, 5, 177); width:10%" class="ml-3" id="sambutan-direktur-divider"></div>
                    <h4 class="p-3 font-weight-bold" id="sambutan-direktur-title">WAKTU PROSES</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 ml-3">
                            <p class="text-justify">
                                Waktu yang dibutuhkan untuk menerbitkan Sertifikat Laik Operasi adalah 19 hari(*). Kelengkapan berkas pelanggan adalah aspek terpenting dalam ketepatwaktuan penerbitan Sertifkat Laik Operasi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>
            <div class="section_title mb-70 justify-content-center mt-3 mb-4">
                <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                    <div style="border: 1px solid rgb(177, 5, 177); width:10%" class="ml-3" id="sambutan-direktur-divider"></div>
                    <h4 class="p-3 font-weight-bold" id="sambutan-direktur-title">PERSYARATAN SERTIFIKASI</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 ml-3">
                            <p class="text-justify">
                                <ol class="ol-helper">
                                    <li>Waktu yang dibutuhkan untuk menerbitkan Sertifikat Laik Operasi adalah 19 hari(*). Kelengkapan berkas pelanggan adalah aspek terpenting dalam ketepatwaktuan penerbitan Sertifkat Laik Operasi.</li>
                                        <ul class="ul-helper">
                                            <li>Identitas pemilik instalasi</li>
                                            <li>Lokasi instalasi</li>
                                            <li>Gambar instalasi yang dikeluarkan oleh badan usaha konsultan perencana tenaga listrik atau Direktur Jenderal dan</li>
                                            <li>Peralatan yang dipasang</li>
                                            <li><span>NB:</span> Dalam hal tidak terdapat badan usaha jasa penunjang tenaga listrik bidang konsultansi perencana, gambar instalasi sebagaimana dimaksud pada huruf (d) dapat dikeluarkan oleh badan usaha jasa pembangunan dan pemasangan instalasi penyediaan tenaga listrik sebagai bagian dari pelaksanaan pembangunan dan pemasangan instalasi penyediaan tenaga listrik tanpa dikenakan biaya gambar instalasi.</li>
                                        </ul>
                                    <li class="mt-3">Untuk mendapatkan Sertifikat Laik Operasi, pemegang Izin Usaha Penyediaan Tenaga Listrik (IUPTL), Pemilik Instalasi Pemanfaatan Tenaga Listrik Tegangan Menengah, dan Pemegang Izin Operasi (IO) mengajukan permohonan dengan dilengkapi data sebagai berikut:</li>
                                        <ul class="ul-helper">
                                            <li>Izin usaha penyediaan tenaga listrik, izin operasi, atau identitas pemilik instalasi pemanfaatan tenaga listrik tegangan menengah</li>
                                            <li>Lokasi instalasi</li>
                                            <li>Jenis dan kapasitas instalasi</li>
                                            <li>Gambar instalasi dan tata letak yang dikeluarkan oleh badan usaha jasa konsultansi perencana tenaga listrik yang memiliki Izin Usaha Jasa Penunjang Tenaga Listrik</li>
                                            <li>Diagram satu garis yang dikeluarkan oleh badan usaha jasa konsultansi perencana tenaga listrik yang memiliki Izin Usaha Jasa Penunjang Tenaga Listrik</li>
                                            <li>Spesifikasi peralatan utama instalasi dan</li>
                                            <li>Spesifikasi teknik dan standar yang digunakan</li>
                                        </ul>
                                </ol>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <hr>
            <br>

        </div>
    </div>
@endsection
