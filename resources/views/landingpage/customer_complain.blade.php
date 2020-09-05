@extends('layouts.header')
@section('content')
    <style>
        .ol-helper li {
            list-style-type:decimal !important;
            font-weight: inherit !important;
            margin-left: -1.5rem;
        }
    </style>
    <div class="about_us_area mt-3">
        <div class="container">
            <br>
            <div class="section_title mb-70 justify-content-center mt-3 mb-4">
                <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                    <div style="border: 1px solid rgb(177, 5, 177); width:10%" class="ml-3" id="sambutan-direktur-divider"></div>
                    <h4 class="p-3 font-weight-bold" id="sambutan-direktur-title">Mekanisme Ganti Rugi</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 ml-3">
                            <p class="text-justify">
                                PT. Izza Elektrika Inspeksi Solusindo berkewajiban mengeluarkan ganti rugi apabila terjadi kerusakan pada peralatan maupun sistem yang disebabkan kesalahan dari pihak penguji.
                            </p>
                            <br>
                            <p>Mekanisme pemberian ganti rugi kepada pelanggan / pemilik instalasi adalah sebagai berikut:</p>
                            <ol class="text-justify ol-helper mt-3">
                                <li>Pemberian ganti rugi dapat berupa materi atau dengan penggantian peralatan yang rusak, sesuai dengan kesepakatan kedua belah pihak.</li>
                                <li>Pelanggan menyampaikan pengaduan secara tertulis kepada PT. Izza Elektrika Inspeksi Solusindo tentang kerusakan peralatan, selambat-lambatnya 3 hari setelah dioperasikan, dengan dilampiri bukti-bukti dokumentasi.</li>
                                <li>PT. Izza Elektrika Inspeksi Solusindo akan melakukan investigasi bersama-sama dengan pemilik instalasi listrik milik pelanggan dan dituangkan dalam Berita Acara yang disetujui oleh kedua belah pihak. Apabila ternyata kerusakan peralatan yang disebabkan oleh petugas milik pelanggan, maka kerusakan peralatan bukan menjadi tanggungjawab PT. Izza Elektrika Inspeksi Solusindo, tetapi bila ternyata kerusakan peralatan tersebut disebabkan karena petugas dari PT. Izza Elektrika Inspeksi Solusindo, maka peralatan tersebut diganti sesuai dengan kesepakatan.</li>
                                <li>Pengajuan klaim akan diproses selambat-lambatnya 3 hari setelah ada kesepakatan dari kedua belah pihak.</li>
                                <li>Apabila dalam waktu 3 hari setelah pengujian tidak ada pengaduan, maka dianggap tidak ada masalah dengan peralatan yang diuji.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>
            {{-- visi PT. IZZA --}}
            <div class="section_title mb-70 justify-content-center mt-3 mb-4" id="customer_complain">
                <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                    <div style="border: 1px solid rgb(177, 5, 177); width:10%" class="ml-3" id="sambutan-direktur-divider"></div>
                    <h4 class="p-3 font-weight-bold" id="sambutan-direktur-title">Keluhan Pelanggan</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 ml-3">
                            <p>
                                Sebagai perusahaan yang bergerak di bidang jasa sertifikasi, tentunya sangat mengedepankan kepuasan pelanggan, sehingga kami harus tanggap terhadap keluhan-keluhan pelanggan.
                            </p>
                            <br>
                            <p class="text-justify">
                                Keluhan pelanggan sebagian besar disebabkan karena keterlambatan proses terbitnya SLO, terkesan lama, hal ini disebabkan karena kelengkapan dokumen baik itu data teknis maupun adminsistrasi pengurusan SLO belum dipenuhi oleh pelanggan sehingga SLO belum bisa diproses lebih lanjut. Selain itu pelanggan masih banyak belum mengetahui persyaratan yang dimaksud, untuk itu diharapkan pelanggan aktif berkoordinasi dengan Tim PT. Izza Elektrika Inspeksi Solusindo.
                            </p>
                            <br>
                            <p>Keluhan pelangggan dapat menghubungi PT. Izza Elektrika Inspeksi Solusindo melalui form di bawah ini:</p>
                            <form id="form-complain" class="mt-3">
                                <div class="form-group">
                                    <label for="instantion_name" class="font-weight-bold">Nama Pemilik Instansi</label>
                                    <input type="text" class="form-control" id="instantion_name" name="instantion_name" v-model="instantion_name" placeholder="Nama Pemilik Instansi (wajib diisi)" required>
                                </div>
                                <div class="form-group">
                                    <label for="instantion_address" class="font-weight-bold">Alamat Lengkap Instansi</label>
                                    <textarea class="form-control" id="instantion_address" name="instantion_address" v-model="instantion_address" rows="3" placeholder="Alamat Lengkap Instansi (wajib diisi)" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="daya" class="font-weight-bold">Daya</label>
                                    <input type="text" class="form-control" id="daya" name="daya" v-model="daya" placeholder="Daya (wajib diisi)" required>
                                </div>
                                <div class="form-group">
                                    <label for="customer_name" class="font-weight-bold">Nama Pemohon</label>
                                    <input type="text" class="form-control" id="customer_name" name="customer_name" v-model="customer_name" placeholder="Nama Pemohon (wajib diisi)" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone_number" class="font-weight-bold">Nomor HP</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" v-model="phone_number" placeholder="Nomor HP (wajib diisi)" required>
                                </div>
                                <div class="form-group">
                                    <label for="complain_message" class="font-weight-bold">Keluhan</label>
                                    <textarea class="form-control" id="complain_message" name="complain_message" v-model="complain_message" rows="3" placeholder="Keluhan (wajib diisi)" required></textarea>
                                </div>
                                <button type="button" class="btn btn-success" @click="submitForm">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var complain = new Vue({
            el   : '#customer_complain',
            data : {
                instantion_name: '',
                instantion_address: '',
                daya: '',
                customer_name:'',
                phone_number: '',
                complain_message:''
            },
            methods: {
                submitForm : function(e) {
                    e.preventDefault()
                    let body = encodeURI(`Format Keluhan Pelanggan\n\nNama Instansi : ${this.instantion_name}\nAlamat Instansi ${this.instantion_address}\nDaya : ${this.daya}\nNama Pemohon : ${this.customer_name}\nTelepon/HP : ${this.phone_number}\nPesan Keluhan : ${this.complain_message}`)
                    let subject = encodeURI(`Keluhan Pelanggan`)
                    urlGmail = `https://mail.google.com/mail/?view=cm&fs=1&to=Izza.inspeksi@gmail.com&su=${subject}&body=${body}`
                    window.open(urlGmail,'_blank')
                    $('form#form-complain')[0].reset()
                }
            }
        })
    </script>
@endsection
