<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 2em;
        }

        .dashboard-card {
            background-color: #3498db;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 2em;
            margin: 1em;
            text-align: center;
            border-radius: 8px;
            width: 200px;
            color: white;
            transition: background-color 0.3s ease-in-out;
        }

        .dashboard-card:hover {
            background-color: #2980b9;
        }

        h2 {
            color: #2c3e50;
        }

        p {
            color: #black;
            font-size: 1.2em;
            margin-top: 0.5em;
        }

        @media (max-width: 768px) {
            section {
                padding: 1em;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>

    <nav>
        <a href="{{url('admin')}}"><i class="fas fa-home"></i> Home</a> |
        <a href="{{url('viewStores')}}"><i class="fas fa-store"></i> Stores</a> |
        <a href="{{url('addStore')}}"><i class="fas fa-box"></i>  Add Stores</a> |
        <a href="{{url('deleteStore')}}"><i class="fas fa-shopping-cart"></i> Delete Stores</a>
    </nav>

    <section>
        <div class="dashboard-card">
            <h2>Total Stores</h2>
            <p>{{$storeCount}}</p>
        </div>

        <div class="dashboard-card">
            <h2>Total Products</h2>
            <p>{{$productCount}}</p>
        </div>

        <div class="dashboard-card">
            <h2>Total Orders</h2>
            <p>500</p>
        </div>
    </section>
</body>
</html>
