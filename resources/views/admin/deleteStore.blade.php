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

        .search-container {
            margin-bottom: 1em;
            display: flex;
            align-items: center;
        }

        input[type=text] {
            padding: 0.5em;
            margin-right: 8px;
            border: none;
            border-radius: 4px;
        }

        button {
            background-color: #3498db;
            color: white;
            padding: 0.5em 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            margin-top: 2em;
            color: #2c3e50;
            border-radius: 8px;
            overflow: hidden;

        }
         th:nth-child(4),
         td:nth-child(4) {
         width: 80px;
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

        td button {
            background-color: #e74c3c;
            color: white;
            padding: 0.5em 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        td button:hover {
            background-color: #c0392b;
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
        <h1>Admin Dashboard - Delete Store</h1>
    </header>
    <nav>
        <a href="{{url('admin')}}"><i class="fas fa-home"></i> Home</a> |
        <a href="{{url('viewStores')}}"><i class="fas fa-store"></i> Stores</a> |
        <a href="{{url('addStore')}}"><i class="fas fa-box"></i>  Add Stores</a> |
        <a href="{{url('deleteStore')}}"><i class="fas fa-shopping-cart"></i> Delete Stores</a>
    </nav>

    <section>
    <div class="search-container">
    <form action="{{url('searchByID/')}}" type="get">
    <input type="text" name="storeId" pattern="[0-9]*" placeholder="Enter ID (Numbers only)">
        <button type="submit">Search</button>
    </form>
    </div>
    @if(session('status'))
    <div style="background-color: #27ae60; color: #fff; padding: 1em; margin-top: 1em; border-radius: 4px; box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);">
        {{ session('status') }}
    </div>
@endif
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               @foreach($stores as $store)
                <tr>
                    <td>{{$store->id}}</td>
                    <td>{{$store->name}}</td>
                    <td>{{$store->location}}</td>
                    <td><a href="{{url('deleteStore/'.$store->id)}}"><button>Delete</button></a></td>
                </tr>
                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </section>
</body>
</html>
