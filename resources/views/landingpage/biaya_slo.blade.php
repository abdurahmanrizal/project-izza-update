@extends('layouts.header')
@section('content')
    <style>
        .ol-helper li{
            list-style-type: decimal !important;
            margin-left: -.5rem !important;
            text-align: justify !important;
        }
        .ul-helper li {
            list-style-type: square !important;
            margin-left: 2rem !important;
        }
        .section_title span {
            display: inline !important;
            color: black !important;
        }
        .line-height-helper {
            vertical-align : middle !important;
            text-align:center;
        }
        td.line-height-helper-2 {
            vertical-align : middle !important;
        }
    </style>
    <div class="about_us_area mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section_title mb-70">
                        <h3 class="mt-3 font-weight-bold wow fadeInUp mt-2 text-center" data-wow-duration="1.2s" data-wow-delay=".2s">Biaya SLO</h3>
                        <br>
                        <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div style="border: 1px solid rgb(223, 7, 7); width:10%" class="ml-3" id="divider-naming-pt"></div>
                            <h4 class="p-3 font-weight-bold" id="naming-pt">
                                Instalasi Pemanfaatan Tenaga Listrik Tegangan Rendah Sampai Dengan Kapasitas 197 kVA
                            </h4>
                            <div class="table-responsive ml-3">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kapasitas Daya</th>
                                            <th>Besaran Biaya (Rp.)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Daya tersambung s.d. 450 VA</td>
                                            <td>40.000</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Daya tersambung 900 VA</td>
                                            <td>60.000</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Daya tersambung 1.300 VA</td>
                                            <td>95.000</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Daya tersambung 2.200 VA</td>
                                            <td>110.000</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Daya tersambung 3.500 VA s.d. 7.700 VA</td>
                                            <td>30/VA</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Daya tersambung 10.600 VA s.d. 23.000 VA</td>
                                            <td>25/VA</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Daya tersambung 33.000 VA s.d. 66.000 VA</td>
                                            <td>20/VA</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Daya tersambung 82.500 VA s.d. 197.000 VA</td>
                                            <td>15/VA</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div style="border: 1px solid rgb(223, 7, 7); width:10%" class="ml-3" id="divider-naming-pt"></div>
                            <h4 class="p-3 font-weight-bold" id="naming-pt">
                                Instalasi Pemanfaatan Tenaga Listrik Tegangan Rendah di Atas Kapasitas 197 kVA
                            </h4>
                            <div class="table-responsive ml-3">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kapasitas Daya</th>
                                            <th>Besaran Biaya (Rp.)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Daya tersambung di atas 197 kVA s.d. 1 MVA</td>
                                            <td>13/VA</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Daya tersambung di atas 1 MVA s.d. 2 MVA</td>
                                            <td>11/VA</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Daya tersambung di atas 2 MVA s.d. 3 MVA</td>
                                            <td>9/VA</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Daya tersambung di atas 3 MVA s.d. 5 MVA</td>
                                            <td>7/VA</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Daya tersambung di atas 5 MVA s.d. 12 MVA</td>
                                            <td>5/VA</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Daya tersambung di atas 12 MVA s.d. 46 MVA</td>
                                            <td>4/VA</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Daya tersambung di atas 46 MVA</td>
                                            <td>3/VA</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="ml-3 mt-3">
                                <p class="font-weight-bold">Catatan:</p>
                                <ul class="ul-helper">
                                    <li>Harga  tersebut  belum  termasuk  Transportasi  &  Akomodasi  Inspektur  untuk  1  kali pemberangkatan Rp.3.000.000</li>
                                    <li>Harga belum termasuk PPN</li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div style="border: 1px solid rgb(223, 7, 7); width:10%" class="ml-3" id="divider-naming-pt"></div>
                            <h4 class="p-3 font-weight-bold" id="naming-pt">Instalasi Pemanfaatan Tenaga Listrik Tegangan Menengah</h4>
                            <ol class="ol-helper">
                                <li>
                                    Biaya Pemeriksaan dan Pengujian Trafo
                                    <br>
                                    <br>
                                    <div class="table-responsive mb-3">
                                        <table class="table table-striped">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kapasitas Trafo</th>
                                                    <th>Besaran Biaya (Rp.)</th>
                                                </tr>

                                                <tr>
                                                    <td class="font-weight-bold">A</td>
                                                    <td class="font-weight-bold text-center" colspan="2">Biaya Tetap</td>

                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Kapasitas Trafo 25 kVA s.d. < 200 kVA</td>
                                                    <td>3.000.000</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Kapasitas Trafo 200 kVA s.d. < 630 kVA</td>
                                                    <td>4.000.000</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Kapasitas Trafo 630 kVA s.d. < 1.250 kVA</td>
                                                    <td>5.500.000</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Kapasitas Trafo 1.250 kVA s.d. < 1.600 kVA</td>
                                                    <td>6.000.000</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Kapasitas Trafo 1.600 kVA s.d. < 2.500 kVA</td>
                                                    <td>6.500.000</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Kapasitas Trafo 2.500 kVA s.d. 3.000 kVA</td>
                                                    <td>7.000.000</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">B</td>
                                                    <td class="font-weight-bold text-center" colspan="2">Biaya Tidak Tetap</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="text-center">Berupa  biaya at cost untuk akomodasi, transportasi, dan sewa alat uji.</td>
                                                </tr>
                                        </table>
                                    </div>
                                </li>
                                <li>
                                    Biaya Pemeriksaan dan Pengujian Kubikel dan Jaringan Distribusi
                                    <br>
                                    <br>
                                    <div class="table-responsive mb-3">
                                        <table class="table table-striped">
                                            <tr>
                                                <th>No</th>
                                                <th>Kubikel dan Jaringan</th>
                                                <th>Besaran Biaya (Rp.)</th>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">A</td>
                                                <td class="font-weight-bold text-center" colspan="2">Biaya Tetap</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Kubikel 1 (satu) unit</td>
                                                <td>2.000.000</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Panjang Saluran Udara Tegangan Menengah kurang dari sama dengan 5 kms (lima kilo meter sirkit)</td>
                                                <td rowspan="3" class="line-height-helper-2">4.000.000</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Panjang Saluran Kabel Tegangan Menengah kurang dari sama dengan 5 kms (lima kilo meter sirkit)</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Panjang Saluran Udara Tegangan Rendah kurang dari sama dengan 5 kms (lima kilo meter sirkit</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Panjang Saluran Kabel Tegangan Rendah kurang dari sama dengan 5 kms (lima kilo meter sirkit)</td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">B</td>
                                                <td class="font-weight-bold text-center" colspan="2">Biaya Tidak Tetap</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" colspan="3">Berupa  biaya at cost untuk akomodasi, transportasi, dan sewa alat uji.</td>
                                            </tr>
                                        </table>
                                    </div>
                                </li>
                            </ol>
                            <div class="mt-3" style="margin-left: 2.5rem">
                                <p class="font-weight-bold">Catatan:</p>
                                <ul class="ul-helper">
                                    <li>Harga  tersebut  belum  termasuk  Transportasi  &  Akomodasi  Inspektur  untuk  1  kali pemberangkatan Rp.3.000.000</li>
                                    <li>Harga belum termasuk PPN</li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div style="border: 1px solid rgb(223, 7, 7); width:10%" class="ml-3" id="divider-naming-pt"></div>
                            <h4 class="p-3 font-weight-bold" id="naming-pt">
                                Instalasi Pembangkit Listrik Tenaga Diesel (PLTD)
                            </h4>
                            <div class="table-responsive ml-3">
                                <table class="table table-striped">

                                        <tr>
                                            <th>Mata Uji Sistem</th>
                                            <th>100 Kva s/d 500 Kva</th>
                                            <th>Biaya SLO</th>
                                        </tr>

                                        <tr>
                                            <td rowspan="21" class="line-height-helper font-weight-bold">PEMBANGKIT LISTRIK TENAGA DIESEL (PLTD) UNTUK KEPENTINGAN SENDIRI DALAM 1 LOKASI</td>
                                            <td>
                                                1 Unit
                                            </td>
                                            <td>
                                                Rp. 11.340.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2 Unit
                                            </td>
                                            <td>
                                                Rp. 15.540.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3 Unit
                                            </td>
                                            <td>
                                                Rp. 19.740.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4 Unit
                                            </td>
                                            <td>
                                                Rp. 23.940.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5 Unit
                                            </td>
                                            <td>
                                                Rp. 28.140.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                6 Unit
                                            </td>
                                            <td>
                                                Rp. 32.340.000
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">600 kVA s/d 1.000 kVA</td>
                                            <td class="font-weight-bold">Biaya SLO</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                1 Unit
                                            </td>
                                            <td>Rp. 12.420.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                1 Unit
                                            </td>
                                            <td>Rp. 12.420.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2 Unit
                                            </td>
                                            <td>Rp. 17.040.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3 Unit
                                            </td>
                                            <td>Rp. 21.660.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4 Unit
                                            </td>
                                            <td>Rp. 26.280.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5 Unit
                                            </td>
                                            <td>Rp. 30.900.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                6 Unit
                                            </td>
                                            <td>Rp. 35.520.000</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">1.100 s/d 2.000 kVA</td>
                                            <td class="font-weight-bold">Biaya SLO</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                1 Unit
                                            </td>
                                            <td>Rp. 13.500.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                2 Unit
                                            </td>
                                            <td>Rp. 18.120.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                3 Unit
                                            </td>
                                            <td>Rp. 22.740.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                4 Unit
                                            </td>
                                            <td>Rp. 27.360.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                5 Unit
                                            </td>
                                            <td>Rp. 31.980.000</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                6 Unit
                                            </td>
                                            <td>Rp. 36.600.000</td>
                                        </tr>
                                </table>
                            </div>
                            <div class="ml-3 mt-3">
                                <p class="font-weight-bold">Catatan:</p>
                                <ul class="ul-helper">
                                    <li>Harga  tersebut  belum  termasuk  Transportasi  &  Akomodasi  Inspektur  untuk  1  kali pemberangkatan Rp.3.000.000</li>
                                    <li>Harga belum termasuk PPN</li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="wow fadeInUp mb-70 mt-4" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div style="border: 1px solid rgb(223, 7, 7); width:10%" class="ml-3" id="divider-naming-pt"></div>
                            <h4 class="p-3 font-weight-bold" id="naming-pt">Prosedur Penerbitan SLO Instalasi Pemanfaatan Tegangan Rendah</h4>
                            <p class="mt-4">
                                <ol class="ol-helper">
                                    <li>
                                        Calon pelanggan melakukan pendaftaran SLO melalui <a href="https://slo.djk.esdm.go.id/pendaftaran" target="_blank" style="color: green">https://slo.djk.esdm.go.id/pendaftaran</a>
                                        dan mengisi form pendaftaran sesuai form data calon pelanggan;
                                        Pendaftaran juga dapat dilakukan dengan cara menghubungi salah satu Lembaga Inspeksi Teknik di nomor urut 1 s.d. 6 pada daftar <a href="https://slodjk.esdm.go.id/lit" target="_blank" style="color: green">Lembaga Inspeksi Teknik.</a>
                                    </li>
                                    <li>
                                        Jika pendaftaran berhasil, maka calon pelanggan akan mendapatkan email verifikasi berisi link untuk melakukan validasi pendaftaran (cek inbox/spam email yang didaftarkan).
                                    </li>
                                    <li>
                                        Jika pendaftaran telah tervalidasi, maka calon pelanggan akan mendapatkan email berisi informasi bahwa pendaftaran telah berhasil dilakukan dan mendapatkan Nomor Agenda.
                                    </li>
                                    <li>
                                        Lembaga Inspeksi Teknik (sesuai pilihan pelanggan pada form pendaftaran) akan menghubungi pelanggan sesuai Nomor Agenda yang diperoleh, dan mengkonfirmasi tentang <a href="https://slodjk.esdm.go.id/halaman/biaya-sertifikasi-laik-operasi" target="_blank" style="color: green">biaya pemeriksaan dan pengujian</a> dan pembayarannya serta waktu pelaksanaan pemeriksaan dan pengujian instalasi milik pelanggan
                                    </li>
                                    <li>
                                        Lembaga Inspeksi Teknik kemudian melakukan pemeriksaan dan pengujian instalasi milik pelanggan sesuai mata uji pada Permen ESDM Nomor 38 tahun 2018 tentang Tata Cara Akreditasi dan Sertifikasi Ketenagalistrikan.
                                    </li>
                                    <li>
                                        Jika Instalasi milik pelanggan dinyatakan Laik Operasi berdasarkan hasil pemeriksaan dan pengujian oleh Lembaga Inspeksi Teknik, maka SLO akan diterbitkan dalam waktu maksimal 3 (tiga) hari kerja oleh Lembaga Inspeksi Teknik.
                                    </li>
                                    <li>
                                        SLO yang telah diterima oleh pelanggan dapat digunakan untuk permohonan Sambung Baru atau Tambah Daya kepada penyedia tenaga listrik.
                                    </li>
                                </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
