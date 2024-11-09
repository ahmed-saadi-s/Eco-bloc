<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <style>
        /* تنسيق العناصر العامة */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container2 {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #008000; /* اللون الأخضر */
            margin-bottom: 20px;
        }
        /* تنسيق البطاقات */
        .order-card {
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease; /* تحريك التغييرات بشكل ناعم */
        }
        .order-card:hover {
            transform: scale(1.05); /* تكبير البطاقة عند تحويل الماوس إليها */
        }
        .order-card img {
            max-width: 120px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .order-details {
            margin-left: 20px;
        }
        .order-details h2 {
            color: #008000; /* اللون الأخضر */
            margin-top: 0;
            margin-bottom: 10px;
        }
        .order-details p {
            margin: 5px 0;
            color: #666;
        }
    </style>
</head>
@extends('layouts.master')
@section('content')

    <div class="container2">
        <h1>My Orders</h1>

        <!-- الطلب الأول -->
        @foreach($ordersData as $order)
        <div class="order-card">
            <img src="{{$order['image']}}" alt="{{$order['product_name']}}">
            <div class="order-details">
                <h2>{{$order['product_name']}}</h2>
                <p><strong>Price:</strong> {{ $order['price'] }}</p>
                <p><strong>Quantity:</strong> {{ $order['quantity'] }}</p>
                <p><strong>Status:</strong> {{ $order['status'] }}</p>
                <p><strong>Order Date:</strong> {{ $order['created_at'] }}</p>
                <!-- يمكنك إضافة المزيد من التفاصيل هنا -->
            </div>
        </div>
        @endforeach

    </div>

    <script>
        // تحديد البطاقات
        var orderCards = document.querySelectorAll('.order-card');

        // تحسين حجم البطاقة عند التحويل إليها
        orderCards.forEach(function(card) {
            card.addEventListener('mouseover', function() {
                this.style.transform = 'scale(1.05)';
            });
            card.addEventListener('mouseout', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>
@stop
