<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<body>
    <p>Hello,</p>
    <p>Here are the details for your invoice ID: {{ $invoice_id }}</p>
    <p>To view your invoice, please click the button below.</p>
    <a href="{{ $url }}" style="background-color: #4CAF50; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;">View Invoice</a>
    <p>{{ $thankyou_note }}</p>
</body>
</html>
