@extends('layouts.header')
@section('content')
    <style>
        .ol-helper li{
            list-style-type: decimal !important;
            margin-left: -.5rem !important;
        }
    </style>
    <div class="about_us_area mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section_title mb-70">
                        <h3 class="mt-3 font-weight-bold wow fadeInUp mt-2 text-center" data-wow-duration="1.2s" data-wow-delay=".2s">Prosedur Pengajuan SLO</h3>
                        <br>
                        <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div style="border: 1px solid rgb(223, 7, 7); width:10%" class="ml-3" id="divider-naming-pt"></div>
                            <h4 class="p-3 font-weight-bold" id="naming-pt">Penjelasan Proses Sertifikasi</h4>
                            <p class="ml-3 text-justify" id="description-pt-one">
                                Berikut adalah standar pelayanan PT. Izza Elektrika Inspeksi Solusindo dalam pelayanan dari awal permohonan hingga Sertifikat Laik Operasi diterima oleh pelanggan :
                            </p>
                            <p class="mt-4">
                                <ol class="ol-helper">
                                    <li>Pemilik instalasi membuat permohonan Sertifikat Laik Operasi melalui surat resmi yang dikeluarkan oleh pemilik instalasi tersebut.</li>
                                    <li>LIT yang ditunjuk melakukan pemeriksaaan kelengkapan dokumen permohonan.</li>
                                    <li>Jika dokumen tidak lengkap, pemilik instalasi harus segera melengkapi berkasnya agar proses permohonan segera diproses.</li>
                                    <li>Jika dokumen sudah lengkap maka LIT yang ditunjuk melakukan uji laik.</li>
                                    <li>Apabila dinyatakan belum lulus evaluasi maka pemilik instlasi harus melakukan perbaikan instalasi.</li>
                                    <li>Dan jika telah lulus evaluasi maka LIT yang ditunjuk membuat laporan hasil pemeriksaan dan pengujian.</li>
                                    <li>LIT yang ditunjuk mengajukan permohonan penerbitan Sertifikat Laik Operasi Online di situs <a href="https://slodjk.esdm.go.id/" target="_blank" style="color: green">https://slodjk.esdm.go.id/</a></li>
                                    <li>Jika permohonan tidak valid maka harus dipenuhi apa saja kekurangan dalam pemenuhan proses penerbitan Sertifikat Laik Operasi tersebut di laman Sertifikat Laik Operasi online tersebut diatas sehingga prosesnya dapat diproses kembali.</li>
                                    <li>Dan jika permohonan telah valid, maka pemerintah akan melakukan registrasi Sertifikat Laik Operasi.</li>
                                    <li>Selanjutnya pemerintah akan menerbitkan Sertifikat Laik Operasi tersebut.</li>
                                    <li>Setelah Sertifikat Laik Operasi telah cetak, maka LIT yang ditunjuk memberikan Sertifikat Laik Operasi tersebut kepada pemilik instalasi.</li>
                                    <li>Dan jika sudah diterima pemilik instalasi mengkonfirmasi Sertifikat Laik Operasi sudah diterima.</li>
                                </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
