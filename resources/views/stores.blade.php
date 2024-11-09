<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        .pagination {
            width: 100%;
            text-align: center;
        }

        .pagination .page-item {
            display: inline-block;
            margin-right: 5px;
        }

        /* تغيير لون خلفية عنصر الـ page-link إلى الأبيض */
        .pagination .page-item .page-link {
            padding: 8px 16px;
            background-color: #fff;
            border: 1px solid #000;
            color: #000;
            border-radius: 5px;
        }

        /* تغيير لون النص في عنصر الـ page-link إلى الأبيض */
        .pagination .page-item .page-link {
            color: #000;
        }

        /* تغيير لون خلفية عنصر الـ page-link عند التحويم إلى الأبيض */
        .pagination .page-item .page-link:hover {
            background-color: #000;
            color: #fff;
        }

        /* تغيير لون خلفية عنصر الـ page-link عند التحديد إلى الأسود */
        .pagination .page-item.active .page-link {
            background-color: #000;
            border-color: #000;
            color: #fff;
        }

        .pagination .page-item.disabled .page-link {
            opacity: 0.6;
            pointer-events: none;
        }

        .pagination .page-item:first-child .page-link,
        .pagination .page-item:last-child .page-link {
            border-radius: 5px;
        }

        .pagination .page-item.disabled .page-link {
            color: #808080;
        }

        .pagination .page-item.disabled .page-link:hover {
            background-color: transparent;
            border-color: transparent;
        }

        /* توسيط عنصر الـ pagination */
        .pagination .page-item {
            margin-right: -2px; /* للحد من التباعد الزائد بين العناصر */
        }

    </style>


</head>
@extends('layouts.master')
@section('content')

    <!-- Page Preloder -->


    <!-- Humberger Begin -->

    <!-- Humberger End -->

    <!-- Header Section Begin -->

    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Categories</span>
                        </div>
                        <ul>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Books and Educational Materials</a></li>
                            <li><a href="#">Cars</a></li>
                            <li><a href="#">Clothing</a></li>
                            <li><a href="#">Electronics and Smart Devices</a></li>
                            <li><a href="#">Food and Beverages</a></li>
                            <li><a href="#">Home and Decor</a></li>
                            <li><a href="#">Personal Care Products</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Sporting Goods</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">

                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->

    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="categories">
        <div class="container">
        <div class="section-title product__discount__title">
                            <h2>Suggestions</h2>
                        </div>    
                                   
            <div class="row">
           
                <div class="categories__slider owl-carousel">
                @foreach($stores as $store)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{$store->image}}">
                        <ul class="product__item__pic__hover">
                            <li><a href="{{url('store/'.$store->id)}}"><i class="fa fa-heart"></i></a></li>
                            <li><a href="{{url('store/'.$store->id)}}"><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name :{{$store->name}} </a></span>
                        </div>
                        <h5><a href="store1.html">Location :{{$store->location}}</a></h5>
                    </div>
                </div>
            </div>
            @endforeach
           
    </section>
    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">


                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>{{$stores->count()}}</span> Stores found</h6>
                                </div>
                            </div>

                        </div>
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="row featured__filter">
                @foreach($stores as $store)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{$store->image}}">
                        <ul class="product__item__pic__hover">
                            <li><a href="{{url('store/'.$store->id)}}"><i class="fa fa-heart"></i></a></li>
                            <li><a href="{{url('store/'.$store->id)}}"><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name :{{$store->name}} </a></span>
                        </div>
                        <h5><a href="store1.html">Location :{{$store->location}}</a></h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="pagination justify-content-center">
                        {{ $stores->links("pagination::bootstrap-4") }}
                    </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->

    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <style>
                        .product__discount__item {
                            position: relative;
                            overflow: hidden;

                            border-radius: 10px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                            transition: box-shadow 0.3s ease-in-out;
                            width: 250px;
                            height: 370px;
                            margin-bottom: 40px;
                            border-radius: 15px; /* زيادة قيمة border-radius لتكون الحواف أكثر دورانًا */
                        }
                        .product__discount__itemm{
                            position: relative;
                            overflow: hidden;
                            border-radius: 10px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                            transition: box-shadow 0.3s ease-in-out;
                            width: 250px;
                            height: 370px;
                            margin-bottom: 40px;
                            border-radius: 15px;
                            transform: translateY(0);
                            transition: transform 0.3s ease-in-out;
                        }

                        .product__discount__item__pic {
                            position: relative;
                            overflow: hidden;
                            border-radius: 10px 10px 0 0;
                            height: 250px;


                        }
                        .product__discount__itemm__pic{
                            position: relative;
                            overflow: hidden;
                            border-radius: 10px 10px 0 0;
                            height: 250px;
                        }

                        .product__discount__item__pic img {
                            max-width: 100%;
                            width: 100%;
                            height: auto; /* يضمن الحفاظ على نسبة العرض والارتفاع الأصلية */
                            object-fit: contain;
                            border-radius: 10px 10px 0 0;
                        }
                        .product__discount__itemm__pic img{
                            width: 100%;
                            height: 100%;
                            object-fit: contain;
                            border-radius: 10px 10px 0 0;
                        }


                        .product__item__pic__hover {
                            position: absolute;
                            bottom: 0;
                            left: 50%;
                            transform: translateX(-50%);
                            opacity: 0;
                            transition: opacity 0.5s ease-in-out;
                        }

                        .product__discount__item:hover .product__item__pic__hover {
                            opacity: 1;

                        }
                        .product__discount__item:hover {
                            transform: scale(1.1); /* زيادة الحجم بنسبة 10% عند التحويم */
                            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3); /* تعديل ظل البطاقة */
                        }


                        .product__discount__item__text {
                            padding: 20px;
                        }

                        .product__discount__item__text h5 {
                            margin-bottom: 10px;
                            font-size: 15px;
                        }

                        .header__top__right__auth span {
                            display: block;
                            margin-bottom: 5px;
                            font-size: 14px;
                        }
    
                    </style>


@stop

</html>
