<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #ecf0f1;
            color: #333;
        }

        header {
            background-color: #2ecc71;
            padding: 1em;
            text-align: center;
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
            color: #fff;
        }

        nav {
            background-color: #27ae60;
            padding: 1em;
            text-align: center;
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 1em;
            transition: color 0.3s ease-in-out;
            font-size: 1.2em;
            border: 1px solid #2ecc71;
            padding: 0.5em 1em;
            border-radius: 20px;
        }

        nav a:hover {
            background-color: #2ecc71;
            color: #fff;
        }
        section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2em;
        }

        .search-bar {
            display: flex;
            margin-bottom: 2em;
        }

        .search-bar input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
        }

        .search-bar button {
            background-color: #27ae60;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #219a52;
        }

        .product-cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            width: 100%;
        }

        .product-card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1em;
            margin: 1em;
            text-align: center;
            border-radius: 8px;
            width: 300px; /* زيادة عرض البطاقة */
            color: #333;
            transition: background-color 0.3s ease-in-out;
            position: relative;
        }

        .product-card img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .product-card h3 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .product-card p {
            font-size: 1.2em;
            color: #777;
            margin-bottom: 30px;
        }

        .product-card .product-id {
            font-size: 1.2em;
            color: #555;
            position: relative;
            top: -15px;

        }

        .product-card .delete-button {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .product-card .delete-button:hover {
            background-color: #c0392b;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            transition: transform 0.3s ease-in-out;
        }

        .product-card:hover img {
            transform: scale(1.1);
        }

        /* زر delete الأخضر */
        .product-card .delete-button-green {
            background-color: #2ecc71;
            color: #fff;

        }

        .product-card .delete-button-green:hover {
            background-color: #219a52;
        }
    </style>
</head>
<body>
<header>
    <h1>Search Product - Admin Dashboard</h1>
</header>
<nav>
    <a href="{{url('managerDashboard')}}" class="dashboard-item">Dashboard</a>
    <a href="{{url('orders')}}" class="dashboard-item">Orders</a>
    <a href="{{url('addProduct')}}" class="dashboard-item">Add Product</a>
    <a href="{{url('viewProducts/'.Auth::user()->id)}}" class="dashboard-item">View Product</a>
</nav>

<section>


    <div class="product-cards-container">
        <!-- بطاقة المنتج 1 -->

            <div class="product-card">
                <img src="{{$product->image_path}}" alt="Product Image">
                <h3>{{$product->id}}</h3>
                <p>{{$product->product_name}}</p>
                <p class="product-id">{{$product->price}}</p>
                <button class="delete-button delete-button-green" onclick="deleteProduct({{$product->id}})">Delete</button>
            </div>


        <!-- يمكنك إضافة المزيد من بطاقات المنتجات هنا -->
    </div>
</section>

<script>




    function deleteProduct(productId) {
        // سيتم تحويل المستخدم إلى العنوان المطلوب مع الـ ID لحذف المنتج
        var confirmDelete = confirm("Are you sure you want to delete product with ID " + productId + "?");

        if (confirmDelete) {
            window.location.href = '/deleteProduct/' + productId; // تغيير المسار حسب الحاجة
        }
    }
</script>
</body>
</html>
