<html>
  <head>
    <meta charset="UTF-8" />
    <title>Daily Progress</title>
    <link rel="shortcut icon" href="{{ asset('images/logo_trafindo_only.png') }}">
    <script src="/assets/v1/js/external/jquery.min.js"></script>
    <script src="/assets/v1/js/forrep.js" type="text/javascript"></script>
    <style type="text/css">
      body {
        margin: 0 auto;
      }
      body,
      td,
      th {
        font-family: "Source Sans Pro", sans-serif;
        font-size: 12px;
      }
      td,
      th {
        vertical-align: top;
        padding: 3px;
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
        background-color: #0052a2;
        border-color: #008d4c;
      }
      .btn.btn-primary:hover,
      .btn.btn-primary:active,
      .btn.btn-primary.hover {
        background-color: #008d4c;
      }
      .bg-info {
        background-color: #d9edf7;
      }
      .bg-success {
        background-color: #dff0d8;
      }

      .title {
        font-size: 14px;
        font-weight: bold;
      }
      
      @page {
        margin: 10mm; /* Adjust margin size as needed */
      }

      .table-head-row >th{
        padding: 10px 0px;
      }

      .tb_head td {
        vertical-align: top;
      }

      .text-vertical-center{
        vertical-align: middle;
      }

      .percentage-row > td{
        text-align: center;
      }

      .daily-weight-plan-row > td, 
      .plan-total-row > td, 
      .blue-cell{
        background-color: #92CDDC;
      }
      
      .actual-total-row > td, 
      .daily-weight-actual-row,
      .yellow-cell{
        background-color: #FFFF00;
      }

      .table-head-row-second{
        font-weight: 700;
      }
    </style>

  </head>
  <body style="" cz-shortcut-listen="true">
    <div align="center">
      <div style="width: 1200px">

        <div class="watermark">
          <div class="bg">&nbsp;</div>

          <table class="tb_data border" border="1" width="100%" >
            <tbody>
              <tr class="table-head-row">
                <th rowspan="2" width="150" class="text-vertical-center">
                    <img src="{{ asset('images/logo_trafindo_full.png') }}" alt="logo_trafindo"
                    style="width: 130px; ">
                </th>
                <th align="center" colspan="4">Progress Daily Report</th>
                <th width="150" rowspan="2" class="text-vertical-center">
                </th>
              </tr>
              <tr style="font-size: 10pt" class="break-down-row">
                {{-- <td><b>WORK BREAK DOWN</b></td> --}}
                <td align="center" colspan="4" style="padding: 10px;">Transformer 700 KvA</td>
                {{-- <td>12Jun</td> --}}
              </tr>
              <tr class="table-head-row-second">
                <td align="center">Weekly</td>
                <td align="center" colspan="4">Mechanical / Electrical / Accessories Protection</td>
                <td align="center">Remarks</td>
              </tr>
              <tr >
                <td align="center" style="padding: 100px 0px;">3 Juli 2023</td>
                <td align="center">Col 1</td>
                <td align="center">Col 1</td>
                <td align="center">Col 1</td>
                <td align="center">Col 1</td>
                <td align="center">Remarks</td>
              </tr>
              <tr >
                <td align="center" style="padding: 100px 0px;">3 Juli 2023</td>
                <td align="center">Col 1</td>
                <td align="center">Col 1</td>
                <td align="center">Col 1</td>
                <td align="center">Col 1</td>
                <td align="center">Remarks</td>
              </tr>
              <tr >
                <td align="center" style="padding: 100px 0px;">3 Juli 2023</td>
                <td align="center">Col 1</td>
                <td align="center">Col 1</td>
                <td align="center">Col 1</td>
                <td align="center">Col 1</td>
                <td align="center">Remarks</td>
              </tr>
              
            </tbody>
          </table>
        </div>
        <div style="page-break-after: always"></div>
        
    </div>

    <!-- tambahan -->
    <script src="/assets/v1/js/forrep.js" type="text/javascript"></script>

    <script type="text/javascript">
      var list = "/siakad/repp_khsmahasiswa";
    </script>
  </body>
</html>
