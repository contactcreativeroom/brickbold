<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        @font-face {
            font-family: 'junicoderegular';
            src: url('../../css/fonts/junicode-webfont.woff2') format('woff2');
        }

        @font-face {
            font-family: 'open_sans';
            src: url('../../css/fonts/opensans-regular-webfont.woff2') format('woff2');
        }

        body {
            font-family: 'open_sans', Arial, sans-serif;
            font-size: 14px;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            text-align: center;
        }

        .container {
            max-width: 800px;
            background: #fff;
            margin: 30px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-family: 'junicoderegular', sans-serif;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .header-table {
            width: 100%;
            border-bottom: 2px solid #000;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        .header-table td {
            vertical-align: middle;
        }

        .header-table img {
            height: 50px;
        }

        .details-table {
            width: 100%;
            margin-bottom: 20px;
        }

        .details-table th, .details-table td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        .details-table th {
            background-color: #f5f5f5;
        }

        .total-section {
            width: 100%;
            margin-top: 10px;
        }

        .total-section td {
            text-align: right;
            padding: 10px;
            font-weight: bold;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            background-color: #121212;
            color: #fff;
            border: none;
            padding: 10px 15px;
            margin: 5px;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #999;
        }

        @media print {
            @page {
                size: A4;
                margin: 20mm;
            }
            #buttonDiv {
                display: none;
            }
        }
    </style>
</head>

@php
    $config = App\Helper\Helper::getWebsiteConfig();
    $grandPrice = $row->order->grand_price;
    $gst = ($grandPrice / 118 * 18);
    $netPrice = ($grandPrice - $gst);
@endphp

<body>

    <div class="container">
        
        <div id="buttonDiv" class="btn-container">
            <button class="btn" onclick="window.print();">Print Invoice</button>
            <button class="btn" onclick="window.close();">Close Window</button>
        </div>

        <h1>Invoice</h1>

        <table class="header-table">
            <tr>
                <td style="width: 120px;">
                    <img src="{{ App\Helper\Helper::getLogo() }}" alt="Logo">
                </td>
                <td>
                    <p><strong>BrickBold</strong></p>
                    <p>{{ data_get($config, 'address', '') }}</p>
                </td>
                <td style="text-align: right;">
                    <p><strong>Mobile:</strong> {{ data_get($config, 'phone', '') }}</p>
                    <p><strong>Email:</strong> {{ data_get($config, 'email', '') }}</p>
                </td>
            </tr>
        </table>

        <table class="details-table">
            <tr>
                <th colspan="2">Billed To</th>
                <th>Invoice Details</th>
            </tr>
            <tr>
                <td colspan="2">
                    <p><strong>{{ $row->user->name }}</strong></p>
                    <p>{{ $row->user->address }}</p>
                    <p><strong>Mobile:</strong> +91 {{ $row->user->phone }}</p>
                </td>
                <td>
                    <p><strong>REF NO:</strong> #BBORD{{ App\Helper\Helper::formatNumber($row->id) }}</p>
                    <p><strong>Invoice Date:</strong> {{ App\Helper\Helper::formatStringDate($row->created_at) }}</p>
                </td>
            </tr>
        </table>

        <table class="details-table">
            <tr>
                <th>Sr No.</th>
                <th>Package Name</th>
                <th>Gross Price</th>
                <th>Discount</th>
                <th>Net Price</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $row->order->package_name }}</td>
                <td>{{ config('constants.CURRENCIES.symbol') . number_format($row->order->package_price, 2) }}</td>
                <td>{{ config('constants.CURRENCIES.symbol') . ($row->order->package_price * $row->order->discount / 100) }} ({{ $row->order->discount }}%)</td>
                <td>{{ config('constants.CURRENCIES.symbol') . number_format($grandPrice, 2) }}</td>
            </tr>
        </table>

        <table class="total-section">
            <tr>
                <td>Sub Total:</td>
                <td>{{ config('constants.CURRENCIES.symbol') . number_format($grandPrice, 2) }}</td>
            </tr>
            <tr>
                <td>Total GST (+):</td>
                <td>{{ config('constants.CURRENCIES.symbol') . number_format($gst, 2) }}</td>
            </tr>
            <tr>
                <td>Grand Total:</td>
                <td>{{ config('constants.CURRENCIES.symbol') . number_format($grandPrice, 2) }}</td>
            </tr>
        </table>

    </div>

</body>
</html>
