<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Financials</title>
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

        table {
            width: 90%;
            border-collapse: collapse;
            margin-top: 2em;
            color: #2c3e50;
            border-radius: 8px;
            overflow: hidden;

        }

        th, td {
            padding: 1em;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        @media (max-width: 768px) {
            section {
                padding: 1em;
            }
        }

        td button {
            background-color: #3498db;
            color: white;
            padding: 0.5em 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            margin: 0 auto; /* لمحاذاة الزر في الوسط */
        }

        td button:hover {
            background-color: #2980b9;
        }

        /* تصغير عرض العمود */
        th:nth-child(3),
        td:nth-child(3) {
            width: 120px; /* ضع العرض الذي تريده هنا */
        }

        /* تصميم مربع الحوار للدفع */
        #paymentDialog {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 8px;
        }

        #paymentDialog input[type="number"],
        #paymentDialog button {
            padding: 10px;
            border-radius: 4px;
            border: none;
            margin-bottom: 10px;
        }

        #paymentDialog input[type="number"] {
            width: 100%;
        }

        #paymentDialog button {
            background-color: #3498db;
            color: white;
            width: 100%;
        }

        #paymentDialog button:hover {
            background-color: #2980b9;
        }

        #paymentConfirmation {
            display: none;
            color: white;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<header>
    <h1>Admin Dashboard - Financials</h1>
</header>
<nav>
    <a href="{{url('admin')}}"><i class="fas fa-home"></i> Home</a> |
    <a href="{{url('financials')}}"><i class="fas fa-money-bill"></i> Financials</a>

    <a href="{{url('viewStores')}}"><i class="fas fa-store"></i> Stores</a> |
    <a href="{{url('addStore')}}"><i class="fas fa-box"></i>  Add Stores</a> |
    <a href="{{url('deleteStore')}}"><i class="fas fa-shopping-cart"></i> Delete Stores</a>
</nav>

<section>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Revenue</th> <!-- العمود الجديد للإيرادات -->
            <th>Actions</th> <!-- تمت إضافة هذا العمود -->
            <th>Payment</th> <!-- عمود جديد للدفع -->
        </tr>
        </thead>
        <tbody>
        @foreach($financialData as $store)
            <tr>
                <td>{{$store['store_id']}} </td>
                <td>{{$store['store_name']}}</td>
                <td>${{number_format($store['revenue'])}}</td>
                <td>
                    <a href="{{ url('viewOrders/'.$store['store_id']) }}"><button>View Orders</button></a>
                </td>
                <td>
                    <div id="paymentDialog{{$store['store_id']}}" style="display: none;">
                        <input type="number" id="paymentAmount{{$store['store_id']}}" placeholder="Enter amount">
                        <button onclick="pay({{$store['store_id']}})">Pay</button>
                    </div>
                    <button id="payButton{{$store['store_id']}}" onclick="showPaymentDialog({{$store['store_id']}})">Pay</button>                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</section>
<script>
    function showPaymentDialog(storeId) {
        var dialogId = "paymentDialog" + storeId;
        document.getElementById(dialogId).style.display = "block";

        var payButtonId = "payButton" + storeId;
        document.getElementById(payButtonId).style.display = "none";
    }

    function pay(storeId) {
        var amountId = "paymentAmount" + storeId;
        var amount = document.getElementById(amountId).value;
        var url = "payment?store_id=" + storeId + "&amount=" + amount;
        window.location.href = url;
    }
</script>


<!-- مربع الحوار للدفع -->


</body>
</html>
