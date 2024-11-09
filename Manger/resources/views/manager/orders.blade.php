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
            padding: 3em;
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

        .order-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 2em;
        }

        .order-table th,
        .order-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .order-table th {
            background-color: #2ecc71;
            color: #fff;
        }

        .order-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .order-table tr:hover {
            background-color: #d4f0a9;
        }

        .action-buttons {
            display: flex;
            align-items: center; /* توسيط الأزرار عمودياً */
        }
        .accept-button, .reject-button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px; /* تغيير الحشوة لتبدو أكثر جاذبية */
            margin-right: 10px; /* تغيير المسافة بين الأزرار */
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px; /* تغيير حجم الخط */
            transition: background-color 0.3s ease-in-out;
            text-decoration: none; /* إزالة الخط تحت النص */
            display: inline-block; /* جعل الزرار في نفس السطر */
        }

        .accept-button:hover {
            background-color: #2980b9;
        }

        .reject-button {
            background-color: #e74c3c;
        }

        .reject-button:hover {
            background-color: #c0392b;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            font-size: 1.2em;
        }

        .alert-error {
            background-color: #f8d7da;
            border-color: #f5c2c7;
            color: #842029;
            padding: 15px;
            border-radius: 5px;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
<header>
    <h1>Order Management - View Orders</h1>
</header>
<nav>
    <a href="{{url('managerDashboard')}}" class="dashboard-item">Dashboard</a>
    <a href="{{url('orders')}}" class="dashboard-item">Orders</a>
    <a href="{{url('addProduct')}}" class="dashboard-item">Add Product</a>
    <a href="{{url('viewProducts/'.Auth::user()->id)}}" class="dashboard-item">View Product</a>
</nav>


<section>

    <table class="order-table">
        <thead>
        <tr>
            <th>Order ID</th>
            <th>Product ID</th>
            <th>Product Price</th>
            <th>Quantity</th>
            <th>Full Name</th>
            <th>Address</th>
            <th>Building</th>
            <th>Mobile Number</th>
            <th>Total Price</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        <!-- Sample order row, replace with actual data -->
        @foreach($orders as $order)

        <tr>
            <td>{{$order->order_id}}</td>
            <td><a href="{{ url('/searchProductByID/' . $order->product_id) }}">{{ $order->product_id }}</a></td>
            <td>{{$order->price}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->name}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->building}}</td>
            <td>{{$order->phone_number}}</td>
            <td>{{$order->price * $order->quantity}}</td>
            <td class="action-buttons">
                <a href="{{ url('/updateStatus/' . $order->order_id . '/accept/' . $order->product_id) }}" class="accept-button">Accept</a>
                <a href="{{ url('/updateStatus/' . $order->order_id . '/reject/' . $order->product_id) }}" class="reject-button">Reject</a>
            </td>
        </tr>
        @endforeach
        <!-- Add more rows for each order -->
        </tbody>
    </table>




</section>



</body>
</html>
