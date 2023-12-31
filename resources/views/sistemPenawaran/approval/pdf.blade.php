<html>

<head>
    <meta charset="UTF-8">
    <title>Penawaran Document</title>
    <link href="/assets/v1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/v1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="/assets/v1/js/external/jquery.min.js"></script>
    <script src="/assets/v1/js/forrep.js" type="text/javascript"></script>
    <style type="text/css">
        body {
            margin: 0 auto;
        }

        body,
        td,
        th {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 12px;
        }

        td,
        th {
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

        .header td,
        .header th {
            font-size: 16px;
        }

        .mid td,
        .mid th {
            font-size: 14px;
        }

        .center td,
        .center th {
            text-align: center;
            vertical-align: middle;
        }

        table.border {
            border-collapse: collapse;
        }

        table.border td,
        table.border th {
            border: 1px solid black;
        }

        tr.noborder td,
        tr.noborder th {
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

        .btn.btn-primary:hover,
        .btn.btn-primary:active,
        .btn.btn-primary.hover {
            background-color: #008D4C;
        }

        .bg-info {
            background-color: #D9EDF7;
        }

        .bg-success {
            background-color: #DFF0D8;
        }

        .title {
            font-size: 14px;
            font-weight: bold;
        }

        .table-head>tbody>tr>td {
            padding-left: 10px;
        }

        .header-document>tbody>tr>td
            >table>tbody>tr>td {
            margin: 0px;
            font-size: 9px;
            padding-left: 4px;
        }

        .document-title-row{
            margin: 20px 0px;
        }

        .document-title{
            margin: 0px;
        }

        .tb_data > tbody > tr > th,
        .tb_data > tbody > tr > td{
            padding: 2px 0px;
        }

        .left-space{
            padding-left: 2px !important;
        }

        .footer-document>table>tbody>tr>td {
            margin: 0px;
            font-size: 10px;
            padding-left: 4px;
            padding: 0px 0px 0px 4px;
        }

        

        @media print {

            .col-md-1,
            .col-md-2,
            .col-md-3,
            .col-md-4,
            .col-md-5,
            .col-md-6,
            .col-md-7,
            .col-md-8,
            .col-md-9,
            .col-md-10,
            .col-md-11,
            .col-md-12 {
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

            /* .header-document{
                position: fixed;
                top: 0;
                width: 100%;
            } */

            .footer-document {
                margin-top: 20mm;
                position: fixed;
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
            <table class="header-document" style="width: 800px;">
                <tbody>
                    <tr style="display: flex;   justify-content: space-between; margin: 10px 0px 30px 0px;">
                        <td style="width: 50%; display:flex; align-items: center;" align="left"><img src="{{asset('images/logonew.png') }}" width="190"
                                height="60"></td>
                        <td style="padding-top: 5px;">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Phone/Fax</td>
                                        <td>:</td>
                                        <td>0703, 386 1865, 345 1384</td>
                                    </tr>
                                    <tr>
                                        <td>E-mail</td>
                                        <td>:</td>
                                        <td>trafo@trafoindonesia@gmail.com</td>
                                    </tr>
                                    <tr>
                                        <td>Hotline</td>
                                        <td>:</td>
                                        <td>0815 1729 0000</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>:</td>
                                        <td>www.trafoindonesia.com</td>
                                    </tr>
                                    <tr>
                                        <td>Head Office</td>
                                        <td>:</td>
                                        <td>Jl. Hayam Wuruk 4 FX, Jakarta 10120</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="watermark">
                <!-- <div class="bg">&nbsp;</div> -->
                <div align="center">
                    <table class="table-head border" border="1" width="100%">
                        <tbody>
                            <tr>
                                <td width="100">To</td>
                                <td width="15"> : </td>
                                <td width="299">{{ $penawaran['project_name'] }}</td>
                                <td width="70" valign="top">Date</td>
                                <td width="15" valign="top"> : </td>
                                <td valign="top">{{ $penawaran['date'] }} </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td> : </td>
                                <td>{{ $penawaran['email'] }}</td>
                                <td>MSG No.</td>
                                <td> : </td>
                                <td>{{ $penawaran['no_msg'] }}</td>
                            </tr>
                            <tr>
                                <td>Tel/Fax</td>
                                <td> : </td>
                                <td>{{ $penawaran['tel_fax'] }}</td>
                                <td>Ref No.</td>
                                <td> : </td>
                                <td>{{ isset($penawaran['no_ref']) ? $penawaran['no_ref'] : '-' }}</td>
                            </tr>
                            <tr>
                                <td>attd</td>
                                <td> : </td>
                                <td>{{ $penawaran['attd'] }}</td>
                                <td>Pages</td>
                                <td> : </td>
                                <td>1/2</td>
                            </tr>
                            <tr>
                                <td>cc</td>
                                <td> : </td>
                                <td>{{ isset($penawaran['cc']) ? $penawaran['cc'] : '-' }}</td>
                                <td>Total</td>
                                <td> : </td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="document-title-row">
                        <h4 class="document-title">PENAWARAN HARGA</h4>
                        <h4 class="document-title"><b>{{ $penawaran['attd'] }} - {{ $penawaran['kota'] }}</b></h4>
                    </div>
                    <!-- <div class="title">Kartu Hasil Studi (KHS)</div> -->
                </div>
                <hr>
                <div align="left">
                    <p>Dengan Hormat,</p>
                    <p>Memenuhi permintaan Bapak, mengenai permintaan
                        penawaran harga sebagai berikut :</p>
                </div>
                <table class="tb_data border" border="1" rowspan="3" width="100%">
                    <tbody>
                        <tr>
                            <th>No.</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Satuan</th>
                            <th>Unit Price(Rp)</th>
                            <th>Total Price(Rp)</th>
                            <!--<th>Keterangan</th>-->
                        </tr>
                        @php
                            $prevTrafo = null;
                            $totalPrice= 0;
                            $totalPricebyRow = [];
                        @endphp

                        @foreach($layanan as $key => $layan)

                        @if ($prevTrafo !== $layan->trafo->merk)
                            <tr valign="top" style="font-size:10pt">
                                <td  align="center">{{ $loop->index+1 }}</td>
                                <td class="left-space"><strong>{{ $layan->trafo->merk }}</strong></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                                <td align="center"></td>
                            </tr>
                            @php($prevTrafo = $layan->trafo->merk)
                        @endif

                            <tr valign="top" style="font-size:10pt">
                                <td></td>
                                <td class="left-space">&nbsp;&nbsp;{{ $layan->layanan }}</td>
                                <td align="center">{{ $layan->qty }}</td>
                                <td align="center">{{ $layan->satuan }}</td>
                                <td align="center" class="rupiah">{{ $layan->price }}</td>
                                @php($subtotal = $layan->price*$layan->qty )
                                <td align="center" class="rupiah">{{ $subtotal }}</td>
                                @php($totalPriceByRow[] = $subtotal)
                            </tr>

                            @if ($layan->layanan == 'Maintenance_Trafo_Dry_Type')
                                @foreach ($dryTypeList as $dry)
                                    <tr valign="top" style="font-size:10pt">
                                        <td></td>
                                        <td class="left-space">&nbsp;&nbsp;&nbsp;- {{ $dry }}</td>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                    </tr>
                                @endforeach
                            @elseif ($layan->layanan == 'Maintenance_Trafo_Oil_Type')
                                @foreach ($oilTypeList as $oil)
                                    <tr valign="top" style="font-size:10pt">
                                        <td></td>
                                        <td class="left-space">&nbsp;&nbsp;&nbsp;- {{ $oil }}</td>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                    </tr>
                                @endforeach
                            @else
                                @php($uniqueSubLayanan = $layanan->where('id_trafo', $layan->id_trafo)
                                    ->where('layanan', $layan->layanan)
                                    ->unique('sub_layanan'))

                                @foreach ($uniqueSubLayanan as $subLayanan)
                                    <tr valign="top" style="font-size:10pt">
                                        <td></td>
                                        <td class="left-space">&nbsp;&nbsp;&nbsp;- {{ $subLayanan->sub_layanan }}</td>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                        <td align="center"></td>
                                    </tr>
                                @endforeach
                            @endif
                            @php($totalPrice += $totalPriceByRow[$key])
                            
                        @endforeach
                        <tr>
                            <td align="end" colspan="5" style="padding-right: 20px;"><b>Total</b></td>
                            <td align="center" colspan="5" class="rupiah">{{ $totalPrice }}</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table class="tb_data " width="100%">
                    <tr>
                        <td width="200">Syarat dan Ketentuan :</td>
                        <td width="10">:</td>
                        @if (isset($syarat[0]))
                        <td>- {{ $syarat[0]['deskripsi'] }}</td>
                        @else
                        <td></td>
                        @endif
                    </tr>
                    @php($syaratLength = count($syarat))
                    @for ($i=1; $i<$syaratLength ; $i++)
                        <tr>
                            <td colspan="2"></td>
                            <td>- {{ $syarat[$i]['deskripsi'] }}</td>
                        </tr>
                    @endfor
                </table><br>

                <table class="tb_data " width="100%">
                    <tr>
                        <td width="200">Syarat Pembayaran </td>
                        <td width="15" align="center">:</td>
                        <td>{{ $penawaran['syarat_pembayaran'] }}</td>
                    </tr>
                    <tr>
                        <td width="200">Pelaksanaan Pekerjaan</td>
                        <td width="15" align="center">:</td>
                        <td>{{ $penawaran['pelaksanaan_pekerjaan'] }}</td>
                    </tr>
                    <tr>
                        <td width="200">Jangka Waktu Penawaran </td>
                        <td width="15" align="center">:</td>
                        <td>{{ $penawaran['jangka_waktu'] }}</td>
                    </tr>

                </table> <br>

                <table width="100%" class="footer-table" style="margin-bottom: 20px;">
                    <tbody>
                        <tr>
                            <td width="50%">
                                Demikian penawaran kami sampaikan sambil
                                menunggu kabar baik dari Bapak, kami ucapkan
                                terima kasih. </td>
                        </tr>
                        <tr>
                            <td>
                                Hormat Kami, </td>
                        </tr>

                        <tr rowspan="4">
                            @if ($penawaran['status'] == 'approved')
                                <td style="padding: 5px 0px;"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Wonho-Signature.svg/1024px-Wonho-Signature.svg.png"
                                    style="width:180px; height:90px; float: left; margin-right: 150px; "> </td>
                            @else      
                                <td style="padding: 5px 0px; width:180px; height:90px; float: left; margin-right: 150px;"></td>
                            @endif
                        </tr>

                        <tr>
                            <td>Purnomoshidi Darmawan</td>
                        </tr>
                        <tr>
                            <td>After Sales Manager</td>
                        </tr>
                    </tbody>
                </table>

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
                    <tr style="margin-bottom: 10px;">
                        <td width="200">E-mail</td>
                        <td width="15" align="center">:</td>
                        <td>yudi.setyadi@trafoindonesia.com</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                        <td colspan="3" style="padding-top: 10px;"><i>service@trafoindonesia.com // Purnomosidhi Darmawan // 0816 954 615 // After Sales Manager // purnomosidhi@trafoindonesia.com</i></td>
                    </tr>
                </table>
            </div>

            <div class="footer-document" style="margin-top: 30px;">
                <table class="tb_data" width="100%">
                    <tr>
                        <td width="50">Factory I</td>
                        <td width="15" align="center">:</td>
                        <td>Jl. Siliwangi, RT 04 / 04 Kel. Alam Jaya, Kec. Jatiuwung - Tangerang</td>
                    </tr>
                    <tr>
                        <td width="50">Factory II</td>
                        <td width="15" align="center">:</td>
                        <td>Jl. Siliwangi, RT 06 / 04 Kel. Alam Jaya, Kec. Jatiuwung - Tangerang, Phone: (62-21) 593 19002-05, Fax: (62-21) 593 19001</td>
                    </tr>
                    <tr>
                        <td width="50">Factory III</td>
                        <td width align="center">:</td>
                        <td>Jl. Siliwangi, RT 04 / 04 Kel. Alam Jaya, Kec. Jatiuwung - Tangerang, Phone: (62-21) 593 20276-78, Fax: (62-21) 593 20279</td>
                    </tr>
                    <tr>
                        <td width="50">Factory IV</td>
                        <td width="15" align="center">:</td>
                        <td>Jl. Raya Siliwangi, RT 04/RW 001, Kel. Gombor, Kec. Periuk, Tangerang, Banten - Indonesia, Phone: (62-21) 590 1565, 5901560</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    <script src="{{ asset('templateAdmin/Admin/dist/assets/libs/jquery/jquery.min.js') }}"></script>
    <!-- tambahan -->
    <script>
        $(document).ready(function() {
            function formatRupiahWithoutSymbol(number) {
                return new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                    minimumFractionDigits: 0,
                    maximumFractionDigits: 0
                }).format(number).replace("Rp", "");
            }
    
            $('.rupiah').each(function() {
                var angka = parseFloat($(this).text());
                if (!isNaN(angka)) {
                    var formatted = formatRupiahWithoutSymbol(angka);
                    $(this).text(formatted);
                }
            });
        });
    </script>
    
    @if (Request::url() == Request::is('sistemPenawaran/penawaran/document*'))
        <script>
            window.onload = function() {
                window.print();
            };
        </script>
    @endif

</body>

</html>