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

        .dashboard-container {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2em;
            margin: 1em;
            text-align: center;
            border-radius: 8px;
            width: 80%;
            color: #333;
            transition: background-color 0.3s ease-in-out;
        }

        .dashboard-item {
            background-color: #2ecc71;
            color: #fff;
            padding: 1em 2em;
            margin: 1em;
            border-radius: 30px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            font-size: 1.2em;
            text-decoration: none;
            display: inline-block;
        }

        .dashboard-item:hover {
            background-color: #27ae60;
        }

        .product-management {
            display: flex;
            justify-content: space-around;
            margin-top: 2em;
        }

        .product-management a {
            text-decoration: none;
            color: #333;
            background-color: #ecf0f1;
            border: 1px solid #bdc3c7;
            padding: 1em 2em;
            border-radius: 8px;
            transition: background-color 0.3s ease-in-out;
        }

        .product-management a:hover {
            background-color: #d2d7d3;
        }

        .product-form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-top: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            color: #555;
        }

        input,
        textarea {
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="file"] {
            display: none;
        }

        .custom-file-upload {
            display: inline-block;
            padding: 12px 20px;
            cursor: pointer;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 12px;
        }

        .custom-file-upload:hover {
            background-color: #2980b9;
        }

        button {
            background-color: #27ae60;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            backgroun
            d-color: #219a52;
        }
        
    </style>
</head>
<body>
<header>
    <h1>Product Management - Add product</h1>
</header>

<nav>
    <a href="{{url('managerDashboard')}}" class="dashboard-item">Dashboard</a>
    <a href="{{url('orders')}}" class="dashboard-item">Orders</a>
    <a href="{{url('addProduct')}}" class="dashboard-item">Add Product</a>
    <a href="{{url('viewProducts/'.Auth::user()->id)}}" class="dashboard-item">View Product</a>
</nav>


<section>
    <div class="product-form-container">
        <h2>Add Product</h2>
        <form action="{{url('/insertProduct')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="productName">Product Name:</label>
            <input type="hidden" id="managerID" name="managerID" value="{{  Auth::user()->id}}">

            <input type="text" id="productName" name="productName" required>

            <label for="productPrice">Product Price:</label>
            <input type="number" id="productPrice" name="productPrice" required>

            <label for="productDescription">Product Description:</label>
            <textarea id="productDescription" name="productDescription" required></textarea>

            <label for="productQuantity">Product Quantity:</label>
            <input type="number" id="productQuantity" name="productQuantity" required>

            <label for="coverImage" class="custom-file-upload">Choose a Cover Image for the Product</label>
            <input type="file" id="coverImage" name="coverImage" accept="image/*" style="display: none;">
            <div id="coverImagePreview" style="margin-top: 10px; margin-bottom: 10px;"></div>

            <label for="additionalImages" class="custom-file-upload" style="margin-bottom: 5px;">Choose Additional Images</label>
            <input type="file" id="additionalImages" name="additionalImages[]" accept="image/*" multiple style="display: none;">
            <div id="additionalImagesPreview" style="margin-bottom: 10px;"></div>

            <button type="submit">Add Product</button>
        </form>
    </div>

</section>
<script>
    function clearCoverImage() {
        document.getElementById('coverImagePreview').innerHTML = '';
    }

    function previewCoverImage(input, previewContainer) {
        clearCoverImage();
        var files = input.files;
        for (var i = 0; i < files.length; i++) {
            var fileReader = new FileReader();
            fileReader.onload = function (e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '100px';
                img.style.marginRight = '5px';
                img.style.marginBottom = '5px';
                previewContainer.appendChild(img);
            };
            fileReader.readAsDataURL(files[i]);
        }
    }

    function previewAdditionalImages(input, previewContainer) {
        var files = input.files;
        for (var i = 0; i < files.length; i++) {
            var fileReader = new FileReader();
            fileReader.onload = function (e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '100px';
                img.style.marginRight = '5px';
                img.style.marginBottom = '5px';
                previewContainer.appendChild(img);
            };
            fileReader.readAsDataURL(files[i]);
        }
    }

    document.getElementById('coverImage').addEventListener('change', function() {
        previewCoverImage(this, document.getElementById('coverImagePreview'));
    });

    document.getElementById('additionalImages').addEventListener('change', function() {
        previewAdditionalImages(this, document.getElementById('additionalImagesPreview'));
    });

</script>
</body>
</html>
