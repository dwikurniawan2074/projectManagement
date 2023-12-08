<html>
  <head>
    <meta charset="UTF-8" />
    <title>Weekly Progress</title>
    <link rel="shortcut icon" href="{{ asset('images/logo_trafindo_only.png') }}">
    <script src="/assets/v1/js/external/jquery.min.js"></script>
    <script src="/assets/v1/js/forrep.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
      body {
        margin: 0 auto;
      }
      body,
      td,
      th {
        font-family: "Source Sans Pro", sans-serif;
        font-size: 10px;
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

      .table-head-row > .second-column{
        text-align: left;
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
      @media print{
        @page {
          size: landscape
        }
        .navbar{
          display: none;
        }
      }
    </style>

  </head>
  <body style="" cz-shortcut-listen="true">
    <div align="center">

      {{-- add navbar disini --}}
      <nav class="navbar bg-light">
        <div class="container-fluid d-flex justify-content-around">
          <span class="navbar-brand mb-0 h1" style="color: #777;">Weekly Progress</span>
          <div class="button-group">
            <a href="{{ route('projects.show', ['id' => $project->id]) }}">
              <button type="button" class="btn btn-secondary btn-sm"><i class="fa fa-angle-left" aria-hidden="true"></i>&nbsp; Back</button>
            </a>
            <button type="button" class="btn btn-danger ms-2 btn-sm" onclick="window.print()"><i class="fa fa-print" aria-hidden="true"></i>&nbsp; Print</button>
          </div>
        </div>
      </nav>

      <div style="width: 1200px">

        <div class="watermark fabrication-schedule" style="margin-bottom: 100px;">
          <div class="bg">&nbsp;</div>

          <table class="tb_data border" border="1" width="100%" >
            <tbody>
              <tr class="table-head-row">
                <th width="200" colspan="2" class="text-vertical-center">CUSTOMER NAME PROJECT PURCHASE ORDER SPECIFICATION DATA CONTRACT END (DELIVERY)</th>
                <th colspan="4" class="second-column">
                  <p>
                    PT POLYTAMA PROPINDO 
                  </p>
                  <p style="margin-bottom: 0px;">
                    JL-41300 REV, 01 
                  </p>
                  <p style="margin: 0px;">
                    1 x 7500 kVA 
                  </p>
                  28 Juli 2023</th>
                <th colspan="19" class="text-vertical-center">
                  <h6>
                    <b>
                      FABRICATION SCHEDULE
                    </b>
                  </h6>
                </th>
                <th colspan="6" class="text-vertical-center">
                    <img src="{{ asset('images/logo_trafindo_full.png') }}" alt="logo_trafindo"
                    style="width: 130px; ">
                </th>
              </tr>
              <tr style="font-size: 10pt" class="break-down-row">
                <td align="center" colspan="2" rowspan="3" class="text-vertical-center"><b>WORK BREAK DOWN</b></td>
                <td align="center" width="30" rowspan="3" class="text-vertical-center">&nbsp;%&nbsp;</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <td>12Jun</td>
                <!--<td align="center"></td>-->
              </tr>
              <tr style="font-size: 10pt" class="percentage-row">
                <!-- <td align="center" colspan="2">Work Break Down</td> -->
                <!-- <td>col</td> -->
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <td>s/d</td>
                <!--<td align="center"></td>-->
              </tr>
              <tr style="font-size: 10pt">
                <!-- <td align="center" colspan="2">Work Break Down</td> -->
                <!-- <td>col</td> -->
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <td>1Mei</td>
                <!--<td align="center"></td>-->
              </tr>
                  <tr>
                    <td align="center" rowspan="2" class="text-vertical-center">Approval Desain</td>
                    <td class="yellow-cell">Plan</td>
                    <td align="center" rowspan="2" class="text-vertical-center">10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <!-- <td rowspan="2"></td> -->
                    <td class="blue-cell">Actual</td>
                    <!-- <td width="30" rowspan="3" class="text-vertical-center">&nbsp;%&nbsp;</td> -->
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td align="center" rowspan="2" class="text-vertical-center">Approval Desain</td>
                    <td class="yellow-cell">Plan</td>
                    <td align="center" rowspan="2" class="text-vertical-center">10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <!-- <td rowspan="2"></td> -->
                    <td class="blue-cell">Actual</td>
                    <!-- <td width="30" rowspan="3" class="text-vertical-center">&nbsp;%&nbsp;</td> -->
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td align="center" rowspan="2" class="text-vertical-center">Approval Desain</td>
                    <td  class="yellow-cell">Plan</td>
                    <td align="center" rowspan="2" class="text-vertical-center">10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <!-- <td rowspan="2"></td> -->
                    <td class="blue-cell">Actual</td>
                    <!-- <td width="30" rowspan="3" class="text-vertical-center">&nbsp;%&nbsp;</td> -->
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td align="center" rowspan="2" class="text-vertical-center">Approval Desain</td>
                    <td class="yellow-cell">Plan</td>
                    <td align="center" rowspan="2" class="text-vertical-center">10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <!-- <td rowspan="2"></td> -->
                    <td class="blue-cell">Actual</td>
                    <!-- <td width="30" rowspan="3" class="text-vertical-center">&nbsp;%&nbsp;</td> -->
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td align="center" rowspan="2" class="text-vertical-center">Approval Desain</td>
                    <td class="yellow-cell">Plan</td>
                    <td align="center" rowspan="2" class="text-vertical-center">10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <!-- <td rowspan="2"></td> -->
                    <td class="blue-cell">Actual</td>
                    <!-- <td width="30" rowspan="3" class="text-vertical-center">&nbsp;%&nbsp;</td> -->
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td align="center" rowspan="2" class="text-vertical-center">Approval Desain</td>
                    <td class="yellow-cell">Plan</td>
                    <td align="center" rowspan="2" class="text-vertical-center">10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <!-- <td rowspan="2"></td> -->
                    <td class="blue-cell">Actual</td>
                    <!-- <td width="30" rowspan="3" class="text-vertical-center">&nbsp;%&nbsp;</td> -->
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td align="center" rowspan="2" class="text-vertical-center">Approval Desain</td>
                    <td class="yellow-cell">Plan</td>
                    <td align="center" rowspan="2" class="text-vertical-center">10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <!-- <td rowspan="2"></td> -->
                    <td class="blue-cell">Actual</td>
                    <!-- <td width="30" rowspan="3" class="text-vertical-center">&nbsp;%&nbsp;</td> -->
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td align="center" rowspan="2" class="text-vertical-center">Approval Desain</td>
                    <td class="yellow-cell">Plan</td>
                    <td align="center" rowspan="2" class="text-vertical-center">10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <!-- <td rowspan="2"></td> -->
                    <td class="blue-cell">Actual</td>
                    <!-- <td width="30" rowspan="3" class="text-vertical-center">&nbsp;%&nbsp;</td> -->
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td align="center" rowspan="2" class="text-vertical-center">Approval Desain</td>
                    <td class="yellow-cell">Plan</td>
                    <td align="center" rowspan="2" class="text-vertical-center">10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <!-- <td rowspan="2"></td> -->
                    <td class="blue-cell">Actual</td>
                    <!-- <td width="30" rowspan="3" class="text-vertical-center">&nbsp;%&nbsp;</td> -->
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td align="center" rowspan="2" class="text-vertical-center">Approval Desain</td>
                    <td class="yellow-cell">Plan</td>
                    <td align="center" rowspan="2" class="text-vertical-center">10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <!-- <td rowspan="2"></td> -->
                    <td class="blue-cell">Actual</td>
                    <!-- <td width="30" rowspan="3" class="text-vertical-center">&nbsp;%&nbsp;</td> -->
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td align="center" rowspan="2" class="text-vertical-center">Approval Desain</td>
                    <td class="yellow-cell">Plan</td>
                    <td align="center" rowspan="2" class="text-vertical-center">10</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <!-- <td rowspan="2"></td> -->
                    <td class="blue-cell">Actual</td>
                    <!-- <td width="30" rowspan="3" class="text-vertical-center">&nbsp;%&nbsp;</td> -->
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
              <tr>
                <td align="center" colspan="2" style="background-color: #D9D9D9;">Total</td>
                <!-- <td class="blue-cell">Actual</td> -->
                <td align="center" style="background-color: #D9D9D9;">100</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="daily-weight-plan-row">
                <td align="center" colspan="3">Daily Weight Plan</td>
                <!-- <td class="blue-cell">Actual</td> -->
                <!-- <td>100</td> -->
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="daily-weight-actual-row">
                <td align="center" colspan="3">Daily Weight Actual</td>
                <!-- <td class="blue-cell">Actual</td> -->
                <!-- <td>100</td> -->
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="plan-total-row">
                <td align="center" colspan="3">Plan Total</td>
                <!-- <td class="blue-cell">Actual</td> -->
                <!-- <td>100</td> -->
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr class="actual-total-row">
                <td align="center" colspan="3">Actual Total</td>
                <!-- <td class="blue-cell">Actual</td> -->
                <!-- <td>100</td> -->
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
          <br />

          <table width="100%" class="footer-table">
            <tbody>
              <tr>
                <th align="end" width="15%"></th>
                <th width="4%"></th>
                <th width="3%"></th>
                <th></th>
              </tr>
              <tr>
                <td style="text-align: end; padding-right: 30px;"><b>Keterangan</b></td>
                <td>Actual</td>
                <td style="background-color: #92CDDC"></td>
                <td></td>
              </tr>
              <tr>
                <td ></td>
                <td>Plan</td>
                <td style="background-color: #FFFF00;"></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div style="page-break-after: always;"></div>

        <div class="watermark daily-report">
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
    </div>

    <script>
      window.onload = function() {
          window.print();
        };
    </script>
  </body>
</html>
