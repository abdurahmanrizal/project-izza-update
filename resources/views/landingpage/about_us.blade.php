@extends('layouts.header')
@section('content')
    <div class="about_us_area mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section_title `mb-70">
                        <h3 class="mt-3 font-weight-bold wow fadeInUp mt-2 text-center" data-wow-duration="1.2s" data-wow-delay=".2s">Tentang Kami</h3>
                        <br>
                        <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div style="border: 1px solid rgb(223, 7, 7); width:10%" class="ml-3" id="divider-naming-pt"></div>
                            <h4 class="p-3 font-weight-bold" id="naming-pt">APA ITU PT. IZZA ELEKTRIKA INSPEKSI SOLUSINDO ?</h4>
                            <p class="ml-3 text-justify" id="description-pt-one">
                                PT. IZZA ELEKTRIKA INSPEKSI SOLUSINDO  berdiri pada tanggal, 7 September 2015. Perusahaan yang bergerak di bidang jasa inspeksi teknik ketenagalistrikan yang telah mendapat penunjukan dari Deriktorat Jendral Ketenaga Listrikan, Kementrian ESDM. Dengan tenaga ahli yang sudah mempunyai penunjukan dari Kementrian ESDM, serta berpengalaman dibidang inspeksi teknik ketenagalistrikan, PT. IZZA ELEKTRIKA INSPEKSI SOLUSINDO  siap melayani pelanggan dengan sebaik baiknya. Inspeksi ini bertujuan untuk menjamin dan menguji kelayakan operasi sebelum di isi tegangan, sehingga dapat dinyatakan aman, handal, dan ramah lingkungan, Sesuai dengan ketentuan regulasi Pemerintah. Hingga kini pelanggan PT. IZZA ELEKTRIKA INSPEKSI  adalah dari berbagai sektor industri seperti ( PLTD, PLTMH, RSUD, PERTAMINA, HOTEL, FACTORY, RUMAH SAKIT SWASTA DLL).
                            </p>
                            <p class="mt-3 ml-3 text-justify mb-2" id="description-pt-two">
                                Produktifitas yang tinggi dari suatu proses produksi salah satunya sangat tergantung dari kondisi peralatan yang telah dinyatakan Aman, Handal, dan Ramah lingkungan. Kondisi kelayakan yang telah lulus uji akan mampu menigkatkan keamanan dan keramah lingkungan serta dapat menjamin keselamatan bagi umat banyak di lokasi kerja. Menginat bahwa peforma yang di  butuhkan cukup tinggi maka perlu langkah-langkah yang lebih terarah dalam pemeriksaan, pengujian, perawatan, pengawasan dan penggunaannya.
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
                    <h4 class="p-3 font-weight-bold" id="sambutan-direktur-title">SAMBUTAN DIREKTUR PT. IZZA ELEKTRIKA INSPEKSI SOLUSINDO ?</h4>
                    <br>
                    <div class="row">
                        {{-- <div class="col-lg-3 col-md-12" id="img-direktur">
                            <img src="{{asset('img/svg_icon/camera.png')}}" class="img-fluid shadow" alt="img-direktur">
                        </div> --}}
                        <div class="col-lg-12 col-md-12 ml-3">
                            <p class="text-justify">
                                Pada kesempatan ini menejemen “PT. IZZA ELEKTRIKA INSPEKSI SOLUSINDO “  menyampaikan terimakasih pada semua pelanggan yang telah memberikan kesempatan dan kepercayaan kepada Perusahaan kami untuk melaksanakan dalam bidang bidang Kelayakan Teknik Tegangan Kelistrikan guna mendukung kepentingan dari perusahaan khususnya dibidang inspeksi. Kami akan terus menjaga kualitas dan integritas, selalu memberi yang terbaik bagi seluruh pelanggan yang telah memeberi kepercayaan kepada kami.
                            </p>
                            <br>
                            <p class="font-weight-bold text-justify">
                                Semoga “PT. IZZA ELEKTRIKA INSPEKSI SOLUSINDO “  mampu untuk memenuhi dan memuaskan pelanggan sesuai dengan harapan dan menjadi rekan yang baik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>
            {{-- visi PT. IZZA --}}
            <div class="section_title mb-70 justify-content-center mt-3 mb-4">
                <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                    <div style="border: 1px solid rgb(177, 5, 177); width:10%" class="ml-3" id="sambutan-direktur-divider"></div>
                    <h4 class="p-3 font-weight-bold" id="sambutan-direktur-title">Visi</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-8 col-md-12" id="img-direktur">
                            <p id="sambutan-direktur-title" class="ml-3" style="font-size: 18px">Melalui Sertifikasi Laik Oprasi kita tingkatkan kualitas dan keamanan Instalasi Listrik</p>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <img src="{{asset('img/svg_icon/maintenance_vision.png')}}" class="img-fluid shadow" alt="icon-visi-pt" id="icon-visi-pt">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>
            {{-- misi PT. IZZA --}}
            <div class="section_title mb-70 justify-content-center mt-3 mb-4">
                <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                    <div style="border: 1px solid rgb(177, 5, 177); width:10%" class="ml-3" id="sambutan-direktur-divider"></div>
                    <h4 class="p-3 font-weight-bold" id="sambutan-direktur-title">Misi</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-2 col-md-12">
                            <img src="{{asset('img/svg_icon/maintenance.png')}}" class="img-fluid shadow" alt="icon-Misi-pt" id="icon-misi-pt">
                        </div>
                        <div class="col-lg-10 col-md-12" id="img-direktur">
                            <p id="misi-title" class="ml-3" style="font-size: 18px">Melaksanakan pemeriksaan instalasi listrik secara tepat, cepat dan akurat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>
             {{-- Maklumat pelayanan --}}
             <div class="section_title mb-70 justify-content-center mt-3 mb-4">
                <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                    <div style="border: 1px solid rgb(177, 5, 177); width:10%" class="ml-3" id="sambutan-direktur-divider"></div>
                    <h4 class="p-3 font-weight-bold" id="sambutan-direktur-title">Maklumat Pelayanan</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" id="img-maklumat-pelayanan">
                            <img src="{{asset('pdf/maklumat-pelayanan.jpg')}}" alt="maklumat-pelayanan" class="img-responsive img-fluid d-block mx-auto" width="700" height="700">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <br>
            {{-- struktur organisasi --}}
            <div class="section_title mb-70 justify-content-center mt-3 mb-4">
                <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                    <div style="border: 1px solid rgb(177, 5, 177); width:10%" class="ml-3" id="sambutan-direktur-divider"></div>
                    <h4 class="p-3 font-weight-bold" id="sambutan-direktur-title">Struktur Organisasi</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <img src="{{asset('img/svg_icon/struktur.png')}}" class="img-fluid d-block mx-auto" alt="struktur organisasi" width="700" height="700">
                            <br>
                            <h4 class="font-weight-bold mt-3 ml-2" id="struktur-manajemen">Struktur Manajemen PT.Izza Elektrika Inspeksi Solusindo</h4>
                            <br>
                            <ul class="ml-2" style="line-height:30px !important">
                                <li><span class="font-weight-bold" style="display: inline !important; font-size: 1rem !important; color: black !important;">Komisaris</span> : Riza Afdholi</li>
                                <li><span class="font-weight-bold" style="display: inline !important; font-size: 1rem !important; color: black !important;">Direktur</span> : Noer Zaini Yatistiqomah</li>
                                <li><span class="font-weight-bold" style="display: inline !important; font-size: 1rem !important; color: black !important;">Manajer Pemasaran</span>: Reza Agil Mahendra</li>
                                <li><span class="font-weight-bold" style="display: inline !important; font-size: 1rem !important; color: black !important;">Manajer Adm & keuangan</span>: Niken Utami</li>
                                <li><span class="font-weight-bold" style="display: inline !important; font-size: 1rem !important; color: black !important;">Manajer Teknik & Operasi</span> : Sutasno</li>
                                <li><span class="font-weight-bold" style="display: inline !important; font-size: 1rem !important; color: black !important;">Penanggung Jawab Teknik</span>
                                    <ul class="ml-4">
                                        <li>Distribusi Tenaga Listrik TM : Sutasno</li>
                                        <li>Distribusi Tenaga Listrik TR : Sutasno</li>
                                        <li>Instalasi Pemanfaatan Tenaga Listrik TM : Rochadi Cahyanto</li>
                                        <li>Pembangkit Listrik Tenaga Surya (PLTS) : Sutasno</li>
                                        <li>Pembangkit Listrik Tenaga Diesel (PLTD) : Rochadi Cahyanto</li>
                                    </ul>
                                </li>
                                <li><span class="font-weight-bold" style="display: inline !important; font-size: 1rem !important; color: black !important;">Tenaga Teknik</span>
                                    <ul class="ml-4">
                                        <li>Distribusi Tenaga Listrik TM : Djoni Susanto</li>
                                        <li>Distribusi Tenaga Listrik TM : Andristin Meila Yonata</li>
                                        <li>Distribusi Tenaga Listrik TM : Supardi</li>
                                        <li>Distribusi Tenaga Listrik TR : Supardi</li>
                                        <li>Distribusi Tenaga Listrik TR : Ranta Marta Dinata</li>
                                        <li>Instalasi Pemanfaatan Tenaga Listrik  TM : Mardiantomo</li>
                                        <li>Instalasi Pemanfaatan Tenaga Listrik  TM : M. Jamaludin Hamid</li>
                                        <li>Instalasi Pemanfaatan Tenaga Listrik  TM : Bambang Riyanto</li>
                                        <li>Instalasi Pemanfaatan Tenaga Listrik  TM : Yusuf Ruri Kurniawan</li>
                                        <li>Instalasi Pemanfaatan Tenaga Listrik  TM : Supardi</li>
                                        <li>Instalasi Pemanfaatan Tenaga Listrik  TM : Andristin Meila Yonata</li>
                                        <li>Instalasi Pemanfaatan Tenaga Listrik  TM : Leo Agung Sumantoro</li>
                                        <li>Instalasi Pemanfaatan Tenaga Listrik  TM : Sudaryono</li>
                                        <li>Instalasi Pemanfaatan Tenaga Listrik  TM : Agus Supriyanto</li>
                                        <li>Pembangkit Listrik Tenaga Surya (PLTS) : M. Jamaludin Hamid</li>
                                        <li>Pembangkit Listrik Tenaga Surya (PLTS) : Yusuf Ruri Kurniawan</li>
                                        <li>Pembangkit Listrik Tenaga Diesel (PLTD) : M. Jamaludin Hamid</li>
                                        <li>Pembangkit Listrik Tenaga Diesel (PLTD) : Yusuf Ruri Kurniawan</li>
                                        <li>Pembangkit Listrik Tenaga Diesel (PLTD) : Ranta Marta Dinata</li>
                                        <li>Pembangkit Listrik Tenaga Diesel (PLTD) : Andristin Meila Dinata</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr>
            {{-- daftar peralatan izzainspekindo --}}
            <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                <div style="border: 1px solid rgb(223, 7, 7); width:10%" class="ml-3" id="divider-naming-pt"></div>
                <h4 class="p-3 font-weight-bold" id="naming-pt">Daftar Peralatan Uji yang Dimiliki dan/atau Perjanjian Kerjasama Penggunaan Peralatan Uji :</h4>
                <p class="ml-3 font-weight-bold" style="font-size: 12px">Keterangan: Jika tabel terpotong dapat lakukan aksi geser dari arah kanan ke kiri pada layar handphone anda</p>
                <div class="table-responsive ml-3">
                    <table class="table table-striped mt-4">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Peralatan / <i>Software</i></th>
                            <th scope="col">Fungsi</th>
                            <th scope="col">Merk/Spesifikasi</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col" colspan="2" class="text-center">Status Kepemilikan</th>
                            <th scope="col" colspan="2" class="text-center">Status Kalibrasi</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">Milik Sendiri</td>
                                <td class="text-center">Sewa</td>
                                <td class="text-center">YA</td>
                                <td class="text-center">Tidak</td>
                            </tr>
                          <tr>
                            <th scope="row">1</th>
                            <td>Tang Ampere 1000 A</td>
                            <td>Mengukur arus listrik pada sebuah kabel konduktor yang dialiri arus listrik dengan menggunakan dua rahang penjepitnya (Clamp) tanpa harus memiliki kontak langsung dengan terminal listriknya.</td>
                            <td>Krisbow KW0600491</td>
                            <td>1 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i> </td>
                            <td class="text-center"> - </td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Insulator Tester  5.000V</td>
                            <td>Mengukur atau menguji tahanan isolasi suatu kabel</td>
                            <td>Kyoritsu 3123</td>
                            <td>2 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Insulator Tester  10.000V</td>
                            <td>Mengukur atau menguji tahanan isolasi suatu kabel</td>
                            <td>Kyoritsu 3123</td>
                            <td>2 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center">  - </td>

                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Earth Tester</td>
                            <td>Mengukur nilai resistansi dari grounding</td>
                            <td>Kyoritsu 4105A</td>
                            <td>1 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Phase Squence Indicator</td>
                            <td>Menunjukan kepada anda urutan suksesi di saat puncak tegangan yang berbeda dari pasokan multifase secara baik dan akurat.</td>
                            <td>Kyoritsu 8031</td>
                            <td>1 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>High Voltage Detector</td>
                            <td>Untuk mengatahui apakah ada atau tidak tegangan pada sumber listrik atau peralatan listrik.</td>
                            <td>Forza</td>
                            <td>1 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Sound Level Meter</td>
                            <td>Mengukur tingkat kebisingan di suatu lingkungan</td>
                            <td>Krisbow KW06-291</td>
                            <td>1 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">8</th>
                            <td>Infrared Thermometer</td>
                            <td>Menggambarkan kemampuan alat mengukur suhu dari jarak jauh.</td>
                            <td>Krisbow KW06-304</td>
                            <td>1 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">9</th>
                            <td>Digital Tachometer</td>
                            <td>Mengukur kecepatan putaran pada poros engkel piringan motor atau mesin lainnya</td>
                            <td>Krisbow KW06-304</td>
                            <td>1 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">10</th>
                            <td>Safety Belt</td>
                            <td>Pelindung jatuh yang kerap dipakai oleh pekerja yang bekerja di ketinggian</td>
                            <td>Haru</td>
                            <td>2 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"> - </td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">11</th>
                            <td>Helm Safety</td>
                            <td>Membuat perlindungan kepala si pekerja, agar dapat terlepas dari kejatuhan barang dan yang lain, dan meminimalkan cedera yang akan menimpa si pekerja tersebut</td>
                            <td> -  </td>
                            <td> 5 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"> - </td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">12</th>
                            <td>Sarung Tangan</td>
                            <td>Melindungi tangan saat bekerja atau sedang berhadapan dengan aliran listrik dan permukaan kasar.</td>
                            <td> Victor  </td>
                            <td> 1 Pasang</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"> - </td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">13</th>
                            <td>Kamera Digital</td>
                            <td>Untuk mengambil gambar ketika berada dilokasi</td>
                            <td>Nexus</td>
                            <td> 1 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"> - </td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">14</th>
                            <td>Laptop</td>
                            <td>Sarana sebagai alat untuk membantu proses pembuatan laporan</td>
                            <td> Samsung</td>
                            <td> 1 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"> - </td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">15</th>
                            <td>Printer</td>
                            <td>Sarana sebagai alat untuk membantu proses pembuatan laporan</td>
                            <td>Epson L380</td>
                            <td> 1 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"> - </td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">16</th>
                            <td>Kaca Pembesar</td>
                            <td>Pembesar Pandangan</td>
                            <td> - </td>
                            <td> 1 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"> - </td>
                            <td class="text-center">  - </td>
                          </tr>
                          <tr>
                            <th scope="row">17</th>
                            <td>Environment Meter</td>
                            <td> - </td>
                            <td> Krisbow KW06-291 </td>
                            <td> 1 Unit</td>
                            <td class="text-center"><i class="fa fa-check-circle" style="font-size: 20px !important; color: green !important"></i></td>
                            <td class="text-center"> - </td>
                            <td class="text-center"> - </td>
                            <td class="text-center">  - </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection
