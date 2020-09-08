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
        @media(min-width: 1200px) {
            .line-height-helper {
                vertical-align : middle !important;
                text-align:center;
            }
        }
    </style>
    <div class="about_us_area mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <div class="section_title mb-70">
                        <h3 class="mt-3 font-weight-bold wow fadeInUp mt-2 text-center" data-wow-duration="1.2s" data-wow-delay=".2s">Izin Usaha</h3>
                        <br>
                        <div class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">
                            <div style="border: 1px solid rgb(223, 7, 7); width:10%" class="ml-3" id="divider-naming-pt"></div>
                            <h4 class="p-3 font-weight-bold" id="naming-pt">Kelengkapan Perizinan PT. IZZA ELEKTRIKA INSPEKSI SOLUSINDO</h4>
                            <p class="ml-3 font-weight-bold" style="font-size: 12px">Keterangan: Jika tabel terpotong dapat lakukan aksi geser dari arah kanan ke kiri pada layar handphone anda</p>
                            <div class="table-responsive ml-3">
                                <table class="table table-striped mt-4">
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col" colspan="2">Kelengkapan	</th>
                                    <th scope="col">Penerbit</th>
                                    <th scope="col">Tanggal Penerbitan</th>
                                    <th scope="col">Nomor</th>
                                    <th scope="col" class="text-center">TGL Berakhir</th>
                                    <th scope="col" class="text-center">Sisa Waktu (hari)</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td rowspan="4" class="line-height-helper">AKTA PENDIRIAN</td>
                                        <td>AKTA PENDIRIAN</td>
                                        <td>SITI NUR AZIZAH, S.H., M.Kn</td>
                                        <td>07 September 2015</td>
                                        <td>51</td>
                                        <td> - </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            KEMENKUMHAM
                                        </td>
                                        <td>
                                            DR. AIDIR AMIN DAUD, S.H., M.H
                                        </td>
                                        <td>
                                            18 September 2015
                                        </td>
                                        <td>AHU-2456992.AH.01.01.TAHU 2015</td>
                                        <td> - </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>AKTA PERUBAHAN</td>
                                        <td>SITI NUR AZIZAH, S.H., M.Kn</td>
                                        <td>23 Juli 2020</td>
                                        <td>138</td>
                                        <td> - </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>KEMENKUMHAM</td>
                                        <td>CAHYO RAHADIAN MUZHAR, S.H., LLM.</td>
                                        <td>28 Maret 2020</td>
                                        <td>AHU-0060454.AH.01.11.TAHUN 2020	</td>
                                        <td> - </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td colspan="2" class="text-center">NPWP</td>
                                        <td>KPP PRATAMA DEMAK</td>
                                        <td> - </td>
                                        <td>73.974.2278-515.000</td>
                                        <td> - </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td colspan="2" class="text-center">IUJPTL</td>
                                        <td>DPM PTSP</td>
                                        <td>21 Mei 2018</td>
                                        <td>671.12/5617 TAHUN 2018</td>
                                        <td>18 November 2020</td>
                                        <td>74</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td colspan="2" class="text-center">SIUP</td>
                                        <td>DPM PTSP</td>
                                        <td>29 Desember 2015</td>
                                        <td>503.11.2/06765/XII/2015	</td>
                                        <td>29 Desember 2020</td>
                                        <td>115</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td colspan="2" class="text-center">TDP</td>
                                        <td>DPM PTSP</td>
                                        <td>29 Desember 2015</td>
                                        <td>110217106766</td>
                                        <td> - </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td colspan="2" class="text-center">PENUNJUKAN</td>
                                        <td>MENTERI ESDM (DJK)</td>
                                        <td>03 Juli 2018</td>
                                        <td>294K/20KDJL.4/2018</td>
                                        <td>11 Desember 2020</td>
                                        <td>97</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td colspan="2" class="text-center">SK DOMISILI</td>
                                        <td>PEMKAB DEMAK KEC. WONOSALAM</td>
                                        <td>27 Maret 2018</td>
                                        <td>470/145/III/2018</td>
                                        <td>26 Maret 2021</td>
                                        <td>202</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td colspan="2" class="text-center">SBU DIST TR</td>
                                        <td>MENTERI ESDM (DJK)</td>
                                        <td>15 Juni 2017</td>
                                        <td>293.1.1.313.K.1A.3321.F17 | 2046.01.F17</td>
                                        <td>15 Juni 2022</td>
                                        <td>648</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td colspan="2" class="text-center">SBU IPTL TM	</td>
                                        <td>MENTERI ESDM (DJK)</td>
                                        <td>28 Februari 2018</td>
                                        <td>036.1.1.315.K.1A.3321.B18 | 0528.03.B18</td>
                                        <td>28 Februari 2023</td>
                                        <td>906</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td colspan="2" class="text-center">SBU DIST TM	</td>
                                        <td>MENTERI ESDM (DJK)</td>
                                        <td>15 Juni 2017</td>
                                        <td>294.1.1.312.K.1A.3321.F17 | 2047.01.F17</td>
                                        <td>15 Juni 2022</td>
                                        <td>648</td>
                                    </tr>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
