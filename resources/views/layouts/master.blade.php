<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="ECO_BLOC">
    <meta name="keywords" content="ECO_BLOCK, ECO, BLOC">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ECO_BLOC</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">

</head>

<body>

<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->

<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo" >
                    <a href="/"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class=""><a href="/">Home</a></li>
                        <li><a href="{{url('stores')}}">Stores</a></li>
                        @if(auth()->check())<li><a href="{{url('myOrders')}}">My Orders</a></li>@endif
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>

                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 mt-3">
                <div class="col-lg-6 col-md-6">
                <div class="header__top__right">
                    
                    
    @auth
    <div class="user-info" style="margin-left: 250px; display: flex; align-items: center; justify-content: flex-end;">
    <!-- محتوى العنصر هنا -->

            <form method="POST" action="{{ route('logout') }}" style="font-weight: 700; display: flex; align-items: center;">
                @csrf
                {{ Auth::user()->FirstName }}&nbsp;{{ Auth::user()->LastName }} <!-- استخدم نوع الفاصلة المناسب -->
                <button type="button" class="logout-button" style="border: none; background: none; cursor: pointer; margin-left: 5px;">
                    <i class="fa fa-chevron-down"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="logoutDropdown" style="display: none; position: absolute; top: 30px; left: 90px;">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </div>
            </form>
        </div>
        <div class="header__cart">
            <div class="header__cart__price">
                <span>My Cart </span>
            </div>
            <ul>
                <li>
                    <a href="{{ url('viewCart') }}">
                        <i class="fa fa-shopping-bag"></i>
                        <span>{{ count((array) session('cart')) }}</span>
                    </a>
                </li>
            </ul>
        </div>
    @else
        <div class="header__top__right__auth">
            <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
        </div>
    @endauth

    @if(auth()->check() && auth()->user()->role === 'admin')

    @endif
    @if(auth()->check() && auth()->user()->role === 'manager')
       
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var logoutButton = document.querySelector('.logout-button');
        var dropdownMenu = document.querySelector('.dropdown-menu');

        logoutButton.addEventListener('click', function() {
            if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
                dropdownMenu.style.display = 'block';
            } else {
                dropdownMenu.style.display = 'none';
            }
        });
    });
</script>


                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>

            </div>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->

<!-- Hero Section End -->

<!-- Categories Section Begin -->

<!-- Categories Section End -->

<!-- Featured Section Begin -->

<!-- Featured Section End -->

<!-- Banner Begin -->

<!-- Banner End -->

<!-- Latest Product Section Begin -->

<!-- Latest Product Section End -->

<!-- Blog Section Begin -->

<!-- Blog Section End -->
@yield('content')

<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="/"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                    </div>
                    <ul>
                        <li>Address: 60-49 Road 11378 New York</li>
                        <li>Phone: +65 11.188.888</li>
                        <li>Email: hello@colorlib.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About Our Shop</a></li>
                        <li><a href="#">Secure Shopping</a></li>
                        <li><a href="#">Delivery infomation</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Our Sitemap</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Innovation</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Join Our Newsletter Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="row">
           
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('assets/js/mixitup.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // احصل على عنوان الصفحة الحالية
        var currentLocation = window.location.href;

        // حدد الرابط الذي يمثل الصفحة الحالية وأضف له العلامة "active"
        var links = document.querySelectorAll('.header__menu ul li a');
        for (var i = 0; i < links.length; i++) {
            if (links[i].href === currentLocation) {
                links[i].parentNode.classList.add('active');
            }
        }

        // إزالة العلامة "active" عند الانتقال إلى صفحة جديدة
        document.querySelectorAll('.header__menu ul li a').forEach(function(link) {
            link.addEventListener('click', function() {
                document.querySelectorAll('.header__menu ul li').forEach(function(li) {
                    li.classList.remove('active');
                });

                this.parentNode.classList.add('active');
            });
        });
    });

</script>



</body>


</html>
