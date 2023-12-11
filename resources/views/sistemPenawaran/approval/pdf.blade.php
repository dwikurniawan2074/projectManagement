<html><head>
        <meta charset="UTF-8">
        <title>Laporan KHS Mahasiswa</title>
        <link href="/assets/v1/css/bootstrap.min.css" rel="stylesheet"
            type="text/css">
        <link href="/assets/v1/css/font-awesome.min.css" rel="stylesheet"
            type="text/css">
        <script src="/assets/v1/js/external/jquery.min.js"></script>
        <script src="/assets/v1/js/forrep.js" type="text/javascript"></script>
        <style type="text/css">
            body {
                margin: 0 auto;
            }
            body, td, th {
                font-family: 'Source Sans Pro', sans-serif;
                font-size: 12px;
            }
            td, th {
                vertical-align: top;
            }
            th {
                text-align: center;
            }
            .font-normal th {
                font-weight: normal;
                vertical-align: middle;
            }
            .kop {
                border-spacing: 0;
                border-collapse: collapse;
            }
            .kop td {
                padding: 0;
                text-align: center;
            }
            .kop-univ td {
                font-size: 16px;
                line-height: 1.1;
            }
            .kop-fak td {
                font-size: 24px;
                font-weight: bold;
                line-height: 1.1;
            }
            .kop-prodi td {
                font-size: 18px;
                font-weight: bold;
                line-height: 1.1;
                padding-bottom: 5px;
            }
            .header td, .header th {
                font-size: 16px;
            }
            .mid td, .mid th {
                font-size: 14px;
            }
            .center td, .center th {
                text-align: center;
                vertical-align: middle;
            }
            table.border {
                border-collapse: collapse;
            }
            table.border td, table.border th {
                border: 1px solid black;
            }
            tr.noborder td, tr.noborder th {
                border: none;
            }
            hr {
                margin: 10px auto;
                border: 1px solid black;
                border-width: 1px 0 0 0;
            }
            .text-center {
                text-align: center;
            }
            .btn-flat {
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                border-radius: 0;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
                border-width: 1px;
            }
            .btn.btn-primary {
                background-color: #0052A2;
                border-color: #008D4C;
            }
            .btn.btn-primary:hover, .btn.btn-primary:active, .btn.btn-primary.hover {
                background-color: #008D4C;
            }
            .bg-info {
                background-color: #D9EDF7;
            }
            .bg-success {
                background-color: #DFF0D8;
            }

            .title{
                font-size: 14px;
                font-weight: bold;
                margin-bottom: 5px;
            }
           
            @media print {

                .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
                  float: left;
                }
                .col-md-12 {
                  width: 100%;
                }
                .col-md-11 {
                  width: 91.66666666666666%;
                }
                .col-md-10 {
                  width: 83.33333333333334%;
                }
                .col-md-9 {
                  width: 75%;
                }
                .col-md-8 {
                  width: 66.66666666666666%;
                }
                .col-md-7 {
                  width: 58.333333333333336%;
                }
                .col-md-6 {
                  width: 50%;
                }
                .col-md-5 {
                  width: 41.66666666666667%;
                }
                .col-md-4 {
                  width: 33.33333333333333%;
                 }
                 .col-md-3 {
                   width: 25%;
                 }
                 .col-md-2 {
                   width: 16.666666666666664%;
                 }
                 .col-md-1 {
                  width: 8.333333333333332%;
                 }
                 .footer1 {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;    
                color: white;
            }

        }
        </style>
    </head>
    <body style cz-shortcut-listen="true">

        <div align="center">
            <div style="width:800px">
                <table style="width: 800px;">
                    <tbody>
                        <tr
                            style="display: flex;  justify-content: space-between;">
                            <td style="width: 15%;" align="center"><img
                                    src="{{asset('images/logonew.png}}"
                                    width="190" height="80"></td>
                            <td>
                                <p style="margin: 0;">Phone/Fax : (62-21) 385
                                    0703, 386 1865, 345 1384</p>
                                <p style="margin: 0;">E-Mail :
                                    trafo@trafoindonesia@gmail.com</p>
                                <p style="margin: 0;">Hotline : 0815 1729 0000</p>
                                <p style="margin: 0;">Website :
                                    www.trafoindonesia.com</p>
                                <p style="margin: 0;">Head Office : Jl. Hayam
                                    Wuruk 4 FX, Jakarta 10120</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr
                    style="border: 0; border-top: 5px double #8c8c8c; margin-top: 0;">
                <style>
        
        .tb_head td {
            vertical-align: top;
        }
    </style>
                <div class="watermark">
                    <!-- <div class="bg">&nbsp;</div> -->
                    <div align="center">
                        <table class="tb_head " style="text-transform:uppercase;" 
                            width="100%">
                            <tbody><tr >
                                    <td width="100">To</td>
                                    <td width="10"> : </td>
                                    <td width="399">DWI KURNIAWAN</td>
                                    <td width="150" valign="top" >Date</td>
                                    <td width="10" valign="top" > : </td>
                                    <td valign="top">00/00/0000 </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td> : </td>
                                    <td>Dwi@gmail.com</td>
                                    <td>Msg no</td>
                                    <td> : </td>
                                    <td>0000/0000/0000</td>
                                </tr>
                                <tr>
                                    <td>Tel/Fax</td>
                                    <td> : </td>
                                    <td>616516816868</td>
                                    <td>Ref No</td>
                                    <td> : </td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>attd</td>
                                    <td> : </td>
                                    <td>7</td>
                                    <td>pages</td>
                                    <td> : </td>
                                    <td>2023 Ganjil</td>
                                </tr>
                                <tr>
                                    <td>cc</td>
                                    <td> : </td>
                                    <td>7</td>
                                    <td>Total</td>
                                    <td> : </td>
                                    <td>2023 Ganjil</td>
                                </tr>
                            </tbody></table><br>
                        <div class="title">PENAWARAN HARGA</div>
                        <!-- <div class="title">Kartu Hasil Studi (KHS)</div> -->
                        <table>
                            <tbody>
                                <tr>
                                    <td class="title">PROJECT</td>
                                    <td class="title">:</td>
                                    <td class="title">PT ABC Tangerang</td>
                                    <td class="title">-</td>
                                    <td class="title">Tangerang</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div align="left">
                        <p>Dengan Hormat,</p>
                        <p>Memenuhi permintaan Bapak, mengenai permintaan
                            penawaran harga sebagai berikut :</p>
                    </div>
                    <table class="tb_data border" border="1" rowspan="3"
                        width="100%">
                        <tbody><tr>
                                <th>No.</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Satuan</th>
                                <th>Unit Price(Rp)</th>
                                <th>Total Price(Rp)</th>
                                <!--<th>Keterangan</th>-->
                            </tr>
                            <tr valign="top" class style="font-size:10pt">
                                <td rowspan="3" align="center">1</td>
                                <td><strong>Trafindo 1x200 KVA SN : 131300647</strong></td>
                                <td align="center"></td>
                                <td align="center">3</td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <!--<td align="center"></td>-->
                            </tr>
                            <tr valign="top" style="font-size:10pt">
                                <td>A. Penggantian oli</td>
                                <td></td>
                                <td></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <!--<td align="center"></td>-->
                            </tr>
                            <tr valign="top" style="font-size:10pt">
                                    <td>&nbsp;&nbsp;&nbsp; Operating System</td>
                                <td align="center">60</td>
                                <td align="center">Liter</td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <!--<td align="center"></td>-->
                            </tr>
                            <tr valign="top" class style="font-size:10pt">
                                <td rowspan="3" align="center">2</td>
                                <td><strong>Trafindo 1x200 KVA SN : 131300647</strong></td>
                                <td align="center"></td>
                                <td align="center">3</td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <!--<td align="center"></td>-->
                            </tr>
                            <tr valign="top" style="font-size:10pt">
                                <td>A. Penggantian oli</td>
                                <td></td>
                                <td></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <!--<td align="center"></td>-->
                            </tr>
                            <tr valign="top" style="font-size:10pt">
                                <td>&nbsp;&nbsp;&nbsp; Operating System</td>
                                <td align="center">60</td>
                                <td align="center">Liter</td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <!--<td align="center"></td>-->
                            </tr>
                            <tr valign="top" class style="font-size:10pt">
                                <td rowspan="3" align="center">3</td>
                                <td><strong>Trafindo 1x200 KVA SN : 131300647</strong></td>
                                <td align="center"></td>
                                <td align="center">3</td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <!--<td align="center"></td>-->
                            </tr>
                            <tr valign="top" style="font-size:10pt">
                                <td>A. Penggantian oli</td>
                                <td></td>
                                <td></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <!--<td align="center"></td>-->
                            </tr>
                            <tr valign="top" style="font-size:10pt">
                                <td>&nbsp;&nbsp;&nbsp; Operating System</td>
                                <td align="center">60</td>
                                <td align="center">Liter</td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <!--<td align="center"></td>-->
                            </tr>
                            <tr>
                                <td align="center" colspan="5">Total</td>
                                <td align="center" colspan="5">5.000.000</td>
                            </tr>
                        </tbody></table>
                    <br>
                    <table class="tb_data " width="100%">
                        <tr>
                            <td width="200" rowspan="7">Syarat dan Ketentuan :</td>
                            <td>- Harga belum termasuk PPN</td>
                        </tr>
                        <tr>
                            <td>- Harga tidak berlaku selama libur hari raya
                                keagamaan dan hari libur nasional</td>
                        </tr>
                        <tr>
                            <td>- Harga belum termasuk PCR test bila diperlukan</td>
                        </tr>
                        <tr>
                            <td>- Harga belum termasuk penggantian material/
                                sparepart trafo</td>
                        </tr>
                        <tr>
                            <td>- Harga belum termasuk alat bantu, alat berat
                                dan helper jika diperlukan</td>
                        </tr>
                        <tr>
                            <td>- Harga belum termasuk penambahan selang
                                purifikasi untuk jarak lebih dari 50 meter</td>
                        </tr>
                        <tr>
                            <td>- Harga belum termasuk modifikasi filter valve
                                jika non standar</td>
                        </tr>

                    </table><br>

                    <table class="tb_data " width="100%">
                        <tr>
                            <td width="200">Syarat Pembayaran </td>
                            <td width="15" align="center">:</td>
                            <td>Syarat Pembayaran</td>
                        </tr>
                        <tr>
                            <td width="200">Pelaksanaan Pekerjaan</td>
                            <td width="15" align="center">:</td>
                            <td>Trafo offline, dibutuhkan daya 3phase 380 V 60 A</td>
                        </tr>
                        <tr>
                            <td width="200">Jangka Waktu Penawaran </td>
                            <td width="15" align="center">:</td>
                            <td>30 hari</td>
                        </tr>

                    </table> <br>

                    <table width="100%" class="footer-table">
                        <tbody><tr>
                                <td width="50%">
                                    Demikian penawaran kamisampaikan sambil
                                    menunggu kabar baik dari Bapak, kami ucapkan
                                    terima kasih. </td>
                            </tr>
                            <tr>
                                <td>
                                    Hormat Kami, </td>
                            </tr>

                            <tr rowspan="4">
                                <!-- <td>&nbsp;</td>  -->
                                <td> <img
                                        src="Tanda_Tangan_Mick_Schumacher.png"
                                        style="width:180px; height:90px; float: left; margin-right: 150px; "
                                        </td>
                                </tr>

                                <tr>
                                    <td>Purnomoshidi Darmawan</td>
                                </tr>
                                <tr>
                                    <td>After Sales Manager</td>
                                </tr>
                            </tbody></table> <br>

                        <table class="tb_data " width="100%">
                            <tr>
                                <td width="200">Sales </td>
                                <td width="15" align="center">:</td>
                                <td>Yudi Setiadi</td>
                            </tr>
                            <tr>
                                <td width="200">Phone/Wa</td>
                                <td width="15" align="center">:</td>
                                <td>(021) 385 0703 / 0815 1046 5538</td>
                            </tr>
                            <tr>
                                <td width="200">E-mail</td>
                                <td width="15" align="center">:</td>
                                <td>yudi.setyadi@trafoindonesia.com</td>
                            </tr>
                        </table><br>

                        <div class="footer1">
                            <table class="tb_data" width="100%">
                                <tr>
                                    <td width="200">Factory I</td>
                                    <td width="15" align="center">:</td>
                                    <td>Yudi Setiadi</td>
                                </tr>
                                <tr>
                                    <td width="200">Factory II</td>
                                    <td width="15" align="center">:</td>
                                    <td>Jl. Siliwangi, RT 04 / 04 Kel. Alam
                                        Jaya, Kec. Jatiuwung - Tangerang</td>
                                </tr>
                                <tr>
                                    <td width="200">Factory III</td>
                                    <td width align="center">:</td>
                                    <td>Jl. Siliwangi, RT 06 / 04 Kel. Alam
                                        Jaya, Kec. Jatiuwung - Tangerang, Phone:
                                        (62-21) 593 19002-05, Fax: (62-21) 593
                                        19001</td>
                                </tr>
                                <tr>
                                    <td width="200">Factory IV</td>
                                    <td width="15" align="center">:</td>
                                    <td>Jl. Raya Siliwangi, RT 04/RW 001, Kel.
                                        Gombor, Kec. Periuk, Tangerang, Banten -
                                        Indonesia, Phone: (62-21) 590 1565,
                                        5901560 </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div style="page-break-after:always"></div>
                </div>
            </div>

            <!-- tambahan -->
            <script src="/assets/v1/js/forrep.js" type="text/javascript"></script>

            <script type="text/javascript">
            var list = "/siakad/repp_khsmahasiswa";
        </script>

        </body></html>