<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; }
        .invoice-header { text-align: center; margin-bottom: 20px; }
        .details { margin-bottom: 30px; }
    </style>
</head>
<body>
    <div class="invoice-header">
        <h1>Invoice #{{ $detail->id }}</h1>
        <p>Date: {{ $detail->created_at->format('Y-m-d') }}</p>
    </div>
    <div class="details">
        <p><strong>Customer:</strong> {{ $detail->name }}</p>
        <p><strong>Total:</strong> ${{ $detail->total_price }}</p>
    </div>
    <div class="items">
        <table border="1" cellspacing="0" cellpadding="5">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td>rakesh</td>
                    <td>fgdf</td>
                    <td>$ghgfhf</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</body>
</html>
