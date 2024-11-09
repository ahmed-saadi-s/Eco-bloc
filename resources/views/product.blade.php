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
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('assets/img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="categories">
        <div class="container">
        <div class="section-title product__discount__title">
                         @if(auth()->check())
                            <h2>Sale Off</h2>
                         @endif
                        </div>            
                        <div class="row">
                            @if(auth()->check())
                            <div class="categories__slider owl-carousel">

                                @foreach ($recommendedProducts as $product)
                                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                                        <div class="product__discount__item">
                                            <div class="product__discount__item__pic set-bg"
                                                 data-setbg="{{ $product->image_path }}">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="{{url('product/'.$product->id)}}"><i class="fa fa-sign-in"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__discount__item__text">
                                                <span>{{ $product->category }}</span>
                                                <h5><a href="#">{{ $product->product_name }}</a></h5>
                                                <div class="product__item__price">${{ $product->price }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
            
    </section>
    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>{{$products->count()}}</span> Products found</h6>
                                </div>
                            </div>
                        </div>
<section class="featured spad">
        <div class="container">
            <div class="row">
            @foreach($products as $product)

                <div class="col-lg-12">
                <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
            <div class="product__item product__discount__item">
                <div class="product__item__pic set-bg" data-setbg="{{$product->image_path}}">
                    <ul class="product__item__pic__hover">
                        <li><a href="{{url('product/'.$product->id)}}"><i class="fa fa-heart"></i></a></li>
                        <li><a href="{{url('product/'.$product->id)}}"><i class="fa fa-sign-in"></i></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6><a href="#">{{$product->product_name}}</a></h6>
                    <h5>{{$product->price}}</h5>
                </div>
            </div>
            @endforeach

            </div>
        </div>
</section>
<style>
    .product__discount__item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease-in-out;
        width: 100%; /* الحفاظ على عرض العنصر */
        height: 370px; /* ضبط الارتفاع حسب الحاجة */
        margin-bottom: 40px; /* إضافة هوامش لإنشاء مسافة بين العناصر */
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
</style>

</div>
                </div>
            <div class="pagination justify-content-center">
                {{ $products->links("pagination::bootstrap-4") }}
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
