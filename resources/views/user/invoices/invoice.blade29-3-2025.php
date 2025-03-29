<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="" type="image/x-icon">
    <title>Invoice</title>
    <style type="text/css">
        @font-face {
            font-family: 'junicoderegular';
            src: url('../../css/fonts/junicode-webfont.eot');
            src: url('../../css/fonts/junicode-webfont.eot?#iefix') format('embedded-opentype'),
                url('../../css/fonts/junicode-webfont.woff2') format('woff2'),
                url('../../css/fonts/junicode-webfont.woff') format('woff'),
                url('../../css/fonts/junicode-webfont.ttf') format('truetype'),
                url('../../css/fonts/junicode-webfont.svg#junicoderegular') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'open_sans';
            src: url('../../css/fonts/opensans-regular-webfont.eot');
            src: url('../../css/fonts/opensans-regular-webfont.eot?#iefix') format('embedded-opentype'),
                url('../../css/fonts/opensans-regular-webfont.woff2') format('woff2'),
                url('../../css/fonts/opensans-regular-webfont.woff') format('woff'),
                url('../../css/fonts/opensans-regular-webfont.ttf') format('truetype'),
                url('../../css/fonts/opensans-regular-webfont.svg#open_sansregular') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        html {
            font-size: 13px;
        }

        body {
            font-size: 1rem;
        }

        .Btnsdiv__Invoice {
            margin-bottom: 30px;
            margin-top: 30px;
            text-align: center;
        }

        .Btnsdiv__Invoice input {
            background-color: #121212;
            color: #fff;
            opacity: 0.75;
            text-decoration: none;
            outline: none;
            border-width: 1px;
            border-color: transparent;
            border-style: solid;
            display: inline-block;
            padding: 8px 12px;
            margin-bottom: 0;
            margin-right: 15px;
            margin-left: 0;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            background-clip: padding-box;
            float: none;
            cursor: pointer;
        }

        .Btnsdiv__Invoice input:focus,
        .Btnsdiv__Invoice input:hover,
        .Btnsdiv__Invoice input:active {
            color: #fff;
            background-color: #999;
            opacity: 1;
            text-decoration: none;
            outline: none;
            border-width: 1px;
            border-color: transparent;
            border-style: solid;
            cursor: pointer;
        }

        .fullWidth {
            width: 100%;
            float: left;
            display: inline-block;
            position: relative;
        }

        .InvoiceTable p {
            margin-bottom: 0;
            margin-top: 0;
            line-height: 1.257;
            letter-spacing: 0;
            color: #000000;
            font-size: 0.81275rem;
        }

        .InvoiceTable p.barcode:not(:last-of-type) {
            margin-bottom: 10px;
        }

        .InvoiceTable tr>td:only-child {
            width: 100%;
        }

        .InvoiceTable tr>td {
            font-size: 0.81275rem;
        }

        .InvoiceTable p:not(:last-of-type) {
            margin-bottom: 3px;
            margin-top: 0;
            display: inline-block;
            width: 100%;
            float: left;
            text-align: left;
        }

        .InvoiceTable h6 {
            margin-bottom: 0;
            margin-top: 0;
            display: inline-block;
            width: 100%;
            float: left;
            text-align: left;
            font-family: 'junicoderegular', sans-serif;
            letter-spacing: 1px;
            font-weight: 600;
            font-size: 1rem;
            line-height: 1.1428;
        }

        .InvoiceTable h6 span {
            display: inline-block;
            float: none;
            font-family: "open_sans", sans-serif;
            font-weight: normal;
        }

        .InvoiceTable h1 {
            margin-bottom: 0;
            margin-top: 0;
            display: inline-block;
            width: 100%;
            float: left;
            text-align: left;
            font-family: 'junicoderegular', sans-serif;
            font-size: 17.75px;
            letter-spacing: 1px;
            font-weight: 600;
        }

        .InvoiceTable h1.para {
            margin-bottom: 0;
            margin-top: 0;
            display: inline-block;
            width: 100%;
            float: left;
            text-align: left;
            font-family: 'open_sans', sans-serif;
            font-size: 17.75px;
            letter-spacing: 1px;
            font-weight: 600;
        }

        .InvoiceTable h6:not(:last-of-type) {
            margin-bottom: 6px;
        }

        .InvoiceTable h6:only-of-type {
            margin-bottom: 6px !important;
        }

        html {
            font-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'open_sans', 'Arial', 'Helvetica', sans-serif;
            font-size: 1rem;
            font-weight: normal;
            font-style: normal;
            text-align: center;
        }

        /* .barcode {font-family: 'basawa_3_of_9_mhrregular';font-size:48px;} */
        .InvoiceTable h6 {
            font-size: 14px;
            font-weight: bold;
        }

        h6.para {
            font-family: "open_sans", sans-serif;
            font-size: 12px;
        }

        table.InvoiceTable h6.para {
            margin-bottom: 0 !important;
        }

        *,
        *:after,
        *:before {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        table.InvoiceTable {
            float: none;
            width: 100%;
            border: 1px solid #ddd;
            table-layout: fixed;
            text-align: left;
            border-collapse: collapse;
            vertical-align: top;
            font-family: 'open_sans', 'Arial', 'Helvetica', sans-serif;
            font-size: 14px;
        }

        table.InvoiceTable>tbody>tr:not(:last-of-type) {
            border-bottom: 1px solid #ddd;
        }

        table.InvoiceTable td,
        table.InvoiceTable th {
            padding: 8px;
            vertical-align: top;
        }

        table:not(.InvoiceTable) {
            table-layout: fixed;
            width: 100%;
            float: left;
            border-collapse: collapse;
            vertical-align: top;
            font-family: 'open_sans', 'Arial', 'Helvetica', sans-serif;
            font-size: 14px;
        }

        table td,
        table th {
            padding: 3px;
            vertical-align: top;
        }

        img {
            max-width: 100%;
        }

        @media print {
            @page {
                size: 8.267in 11.6929in;
            }

            #ButtonDiv {
                display: none;
            }
        }

        tr.alignTr td:last-child,
        tr.alignTr td:last-child h6 {
            text-align: right;
        }
    </style>
</head>

@php
    $config = App\Helper\Helper::getWebsiteConfig();
    $grandPrice = $row->order->grand_price ;
    $gst = ($grandPrice/118*18) ;
    $pacPrice = ($grandPrice - $gst);
@endphp

<body>
    <div class="fullWidth Btnsdiv__Invoice" id="ButtonDiv">
        <input value="Print Invoice" onclick="javascript:window.print();" type="button">
        <input value="Close Window" onclick="window.close();" type="button">
    </div>
    <div style="max-width: 780px; text-align: center; float: none; display: inline-block; width: 100%;">
        <table width="100%" class="InvoiceTable" border="0" cellspacing="0" cellpadding="0"
            style="text-align: left;">
            <tr>
                <td colspan="3">
                    <h1 class="fullWidth" style="text-align: center; margin: 0;">INVOICE</h1>
                </td>
            </tr>
            <tr>
                <td style="width: 105px; vertical-align: middle;"><img src="{{ App\Helper\Helper::getLogo() }}" style="height: 47px;padding: 5px;"></td>
                <td>
                    <p>BrickBold</p>
                    <p>{{ data_get($config, 'address', '') }}</p>

                </td>
                <td>
                    <p>Mobile. : {{ data_get($config, 'phone', '') }}</p>
                    <p>Email: {{ data_get($config, 'email', '') }}</p>
                    {{-- <p>GST No.: 03DIFPS1179Q1ZN</p> --}}
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="text-align: left;">
                        <tr>
                            <td colspan="2">
                                <h6>Billed To:</h6>
                                <p> {{ $row->user->name }} </p>
                                <p> {{ $row->user->address }} </p>
                                <p><b>Mobile:</b> +91 {{ $row->user->phone }} </p>
                            </td>
                            <td colspan="1">
                                <p><b>REF NO. :- #BBORD{{ App\Helper\Helper::formatNumber($row->id) }}</b></p>
                                <p><strong>Invoice Date:
                                    </strong>{{ App\Helper\Helper::formatStringDate($row->created_at) }}</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr class="alignTr" style="background-color:#ddd;">
                                <td style="width: 80px;">
                                    <h6 class="para">Sr No.</h6>
                                </td>
                                <td style="width: 250px;">
                                    <h6 class="para">Package Name </h6>
                                </td>
                                <td>
                                    <h6 class="para">Gross Price</h6>
                                </td>
                                <td>
                                    <h6 class="para">Discount</h6>
                                </td>
                                <td>
                                    <h6 class="para">Net Price</h6>
                                </td>

                            </tr>

                            <tr style="border-bottom: 1px solid #ddd;" class="alignTr">
                                <td>1</td>
                                <td>
                                    <p style="font-weight: bold; font-size: 12px;">{{ $row->order->package_name }}</p>
                                </td>
                                 
                                <td>
                                    {{ config('constants.CURRENCIES.symbol'). number_format($row->order->package_price, 2) }}
                                </td>
                                <td> {{config('constants.CURRENCIES.symbol').($row->order->package_price*$row->order->discount/100)}} ({{$row->order->discount}} %) </td>
                                <td> {{ config('constants.CURRENCIES.symbol').number_format($grandPrice, 2) }}</td>
                            </tr> 


                            <tr style="border-bottom: 1px solid #ddd;">
                                <td colspan="3" rowspan="3"></td>
                                <td colspan="1" style="width:100px; display:block;">Sub Total :</td>
                                <td colspan="1" align="right">{{ config('constants.CURRENCIES.symbol').number_format($grandPrice, 2) }}</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #ddd;">

                                <td colspan="1" style="width:100px; display:block;">Total GST (+):</td>
                                <td colspan="1" align="right">{{ config('constants.CURRENCIES.symbol').number_format($gst, 2) }}</td>
                            </tr>


                            <tr>
                                <td colspan="1" style="width:100px; display:block;">Grand Total:</td>
                                <td colspan="1" align="right">{{ config('constants.CURRENCIES.symbol').number_format($grandPrice, 2) }}</td>
                            </tr>

                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
