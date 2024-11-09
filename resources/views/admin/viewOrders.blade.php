<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Order Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        td {
            color: #555;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Admin View Orders</h1>
    <table>
        <tr>
            <th>Order ID</th>
            <th>Product ID</th>
            <th>Customer Name</th>
            <th>Order Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Website Percentage</th>
            <th>Order Date</th>


        </tr>
        @php
            $totalWebsitePercentage = 0; // تهيئة المتغير لحفظ المجموع
        @endphp

    @foreach ($orders as $order)
                <?php $totalWebsitePercentage += $order->price * $order->quantity * 0.15; ?>
            <tr>
                <td>{{ $order->order_id }}</td>
                <td>{{ $order->product_id }}</td>
                <td>{{ $order->name }}</td>
                <td>${{ number_format($order->price,2) }}</td>
                <td>{{ $order->quantity }}</td>
                <td>${{number_format($order->price * $order->quantity)   }}</td>
                <td>${{ number_format($order->price * $order->quantity * 0.15 ) }}</td>
                <td>{{ $order->created_at }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="6" style="text-align: right;">Total Website Percentage</td>
            <td>${{ number_format($totalWebsitePercentage, 2) }}</td>
        </tr>
        <tr>
            <td colspan="6" style="text-align: right;">Total Amount Paid</td>
            <td>${{ number_format($amount_paid, 2) }}</td>
        </tr>
        <tr>
            <td colspan="6" style="text-align: right;">Total amount due</td>
            <td>${{ number_format($amount_due, 2) }}</td>
        </tr>
    </table>
</div>
</body>
</html>

