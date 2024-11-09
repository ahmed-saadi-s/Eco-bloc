<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="ECO_BLOC">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ECO_BLOC</title>


    <!-- Css Styles -->

</head>


@extends('layouts.master')
@section('content')
    <!-- Page Preloder -->


    <!-- Humberger Begin -->

    <!-- Humberger End -->

    <!-- Header Section Begin -->

    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
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
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{asset('assets/img/hero/banner.jpg')}}">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>

    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{asset('assets/img/featured/feature-3.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href=""><i class="fa fa-heart"></i></a></li>
                            <li><a href=""><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name : </a></span>
                        </div>
                        <h5><a href="store1.html">Location :</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{asset('assets/img/featured/feature-3.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href=""><i class="fa fa-heart"></i></a></li>
                            <li><a href=""><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name : </a></span>
                        </div>
                        <h5><a href="store1.html">Location :</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{asset('assets/img/featured/feature-3.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href=""><i class="fa fa-heart"></i></a></li>
                            <li><a href=""><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name : </a></span>
                        </div>
                        <h5><a href="store1.html">Location :</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{asset('assets/img/featured/feature-3.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href=""><i class="fa fa-heart"></i></a></li>
                            <li><a href=""><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name : </a></span>
                        </div>
                        <h5><a href="store1.html">Location :</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{asset('assets/img/featured/feature-3.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href=""><i class="fa fa-heart"></i></a></li>
                            <li><a href=""><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name : </a></span>
                        </div>
                        <h5><a href="store1.html">Location :</a></h5>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".oranges">Oranges</li>
                            <li data-filter=".fresh-meat">Fresh Meat</li>
                            <li data-filter=".vegetables">Vegetables</li>
                            <li data-filter=".fastfood">Fastfood</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{asset('assets/img/featured/feature-3.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href=""><i class="fa fa-heart"></i></a></li>
                            <li><a href=""><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name : </a></span>
                        </div>
                        <h5><a href="store1.html">Location :</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{asset('assets/img/featured/feature-3.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href=""><i class="fa fa-heart"></i></a></li>
                            <li><a href=""><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name : </a></span>
                        </div>
                        <h5><a href="store1.html">Location :</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{asset('assets/img/featured/feature-3.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href=""><i class="fa fa-heart"></i></a></li>
                            <li><a href=""><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name : </a></span>
                        </div>
                        <h5><a href="store1.html">Location :</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{asset('assets/img/featured/feature-3.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href=""><i class="fa fa-heart"></i></a></li>
                            <li><a href=""><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name : </a></span>
                        </div>
                        <h5><a href="store1.html">Location :</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{asset('assets/img/featured/feature-3.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href=""><i class="fa fa-heart"></i></a></li>
                            <li><a href=""><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name : </a></span>
                        </div>
                        <h5><a href="store1.html">Location :</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{asset('assets/img/featured/feature-3.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href=""><i class="fa fa-heart"></i></a></li>
                            <li><a href=""><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name : </a></span>
                        </div>
                        <h5><a href="store1.html">Location :</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{asset('assets/img/featured/feature-3.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href=""><i class="fa fa-heart"></i></a></li>
                            <li><a href=""><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name : </a></span>
                        </div>
                        <h5><a href="store1.html">Location :</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg" data-setbg="{{asset('assets/img/featured/feature-3.jpg')}}">
                        <ul class="product__item__pic__hover">
                            <li><a href=""><i class="fa fa-heart"></i></a></li>
                            <li><a href=""><i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <div class="header__top__right__auth">
                            <span><a href="store1.html">Store Name : </a></span>
                        </div>
                        <h5><a href="store1.html">Location :</a></h5>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('assets/img/banner/banner-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('assets/img/banner/banner-2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-2.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-3.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-2.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-3.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-2.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-3.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-2.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-3.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-2.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-3.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-1.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-2.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="{{asset('assets/img/latest-product/lp-3.jpg')}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Crab Pool Security</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('assets/img/blog/blog-1.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('assets/img/blog/blog-2.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('assets/img/blog/blog-3.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
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
                            width: 250px;
                            height: 370px;
                            margin-bottom: 40px;
                            border-radius: 15px; /* زيادة قيمة border-radius لتكون الحواف أكثر دورانًا */
                        }
                        .product__discount__item__pic {
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
        </style>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->

    <!-- Footer Section End -->

    <!-- Js Plugins -->



@stop


</html>
