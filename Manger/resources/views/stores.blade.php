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
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
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
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-5">
                    <div class="sidebar">

                        <div class="sidebar__item">

                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Suggestions</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <!-- Product/Store Item 1 -->
                                @foreach($stores as $store)
                                    <div class="col-lg-4">
                                        <div class="product__discount__itemm">
                                            <div class="product__discount__item__pic set-bg" data-setbg="{{$store->image}}">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="{{url('store/'.$store->id)}}"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="{{url('store/'.$store->id)}}"><i class="fa fa-sign-in"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__discount__item__text">
                                                <div class="header__top__right__auth">
                                                    <span><a href="store1.html">Store Name : {{$store->name}}</a></span>
                                                </div>
                                                <h5><a href="store1.html">Location : {{$store->location}}</a></h5>
                                            </div>



                                        </div>

                                    </div>
                                @endforeach


                                <!-- Product/Store Item 2 -->

                                <!-- Repeat the above structure for other product/store items -->

                            </div>
                        </div>

                    </div>
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
                    </div>
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
                    <div class="row">
                        <!-- Product/Store Item 1 -->
                        @foreach($stores as $store)
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg" data-setbg="{{$store->image}}">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="{{url('store/'.$store->id)}}"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="{{url('store/'.$store->id)}}"><i class="fa fa-sign-in"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <div class="header__top__right__auth">
                                            <span><a href="store1.html">Store Name : {{$store->name}}</a></span>
                                        </div>
                                        <h5><a href="store1.html">location : {{$store->location}}</a></h5>
                                    </div>



                                </div>

                            </div>
                        @endforeach
                        <!-- Product/Store Item 1 -->

                        <div class="product__pagination mb-3" style="position: absolute; top: 102%; left: 50%; transform: translate(-50%, -50%); background-color: #fff; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
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




@stop

</html>
