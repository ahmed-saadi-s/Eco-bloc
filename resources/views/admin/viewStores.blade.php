<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stores - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #3498db, #2c3e50);
            color: #fff;
        }

        header {
            background-color: #2c3e50;
            padding: 1em;
            text-align: center;
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
        }

        nav {
            background-color: #34495e;
            padding: 1em;
            text-align: center;
            display: flex;
            justify-content: center;
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 1em;
            transition: color 0.3s ease-in-out;
        }

        nav a:hover {
            color: #ecf0f1;
        }

        section {
            display: flex;
            flex-wrap: wrap;
            padding: 2em;
            justify-content: center; /* تحديد مركز الفراغ الأفقي */
        }

        .store-card {
            background-color: #3498db;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 2em;
            margin: 1em;
            height: 300px; /* تم تقليل الارتفاع */
            text-align: center;
            border-radius: 16px;
            width: 300px; /* تم تقليل العرض */
            color: white;
            transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
            position: relative;
            overflow: hidden;
        }

        .store-card h2,
        .store-card p {
            margin-bottom: 0.5em;
            width: 100%;
        }

        .store-card img {
            max-width: 100%;
            width: 100%;
            height: 200px; /* تم تقليل الارتفاع */
            border-radius: 8px;
            margin-top: 1em;
            object-fit: cover;
            transform: translateY(0);
            transition: transform 0.3s ease-in-out;
        }

        .store-card:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }

        .store-card:hover img {
            transform: translateY(-20px);
        }

        @media (max-width: 768px) {
            section {
                padding: 1em;
            }

            .store-card {
                width: calc(50% - 20px);
            }
        }
        section {
            display: flex;
            flex-wrap: wrap;
            padding: 2em;
            justify-content: flex-start; /* تحديد مركز الفراغ الأفقي */
        }

        .store-card {
            /* القواعد الحالية */
            width: 300px;
            margin: 1em;

            /* تعديل القواعد لتحقيق الترتيب الأفقي */
            margin-right: 1em;
            margin-bottom: 1em;
        }


    </style>
</head>

<body>
<header>
    <h1>Admin Dashboard - Stores</h1>
</header>

<nav>
    <a href="{{url('admin')}}"><i class="fas fa-home"></i> Home</a> |
    <a href="{{url('viewStores')}}"><i class="fas fa-store"></i> Stores</a> |
    <a href="{{url('financials')}}"><i class="fas fa-money-bill"></i> Financials</a>
    <a href="{{url('addStore')}}"><i class="fas fa-box"></i>  Add Stores</a> |
    <a href="{{url('deleteStore')}}"><i class="fas fa-shopping-cart"></i> Delete Stores</a>
</nav>

<section>
    <!-- Example store card 1 -->
    @foreach($stores as $store)
        <div class="store-card">
            <h2>Store Name : {{$store->name}}</h2>
            <p>Location : {{$store->location}}</p>
            <img src="{{$store->image}}" alt="Store Image 1">
        </div>
    @endforeach
</section>
</body>
</html>
