<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Stores - Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


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
            padding: 3em;
        }

        .form-container {
            background-color: #2c3e50;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 2em;
            margin: 1em;
            text-align: center;
            border-radius: 8px;
            width: 100%;
            color: white;
            transition: background-color 0.3s ease-in-out;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin: 1em 0 0.5em 0;
        }

        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            margin-bottom: 1em;
            align-self: center;
        }

        .upload-btn-wrapper .btn {
            margin-top: 10px;

        }

        .upload-btn-wrapper .btn:hover {
            background-color: #3498db;
            color: white;
        }

        .upload-btn-wrapper input[type=file] {

        }

        .file-upload-container {
            margin-bottom: 1em;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .file-label {

        }

        .image-container {
            text-align: center;
            margin-top: 1em;
        }

        img {
            max-width: 100%;
            max-height: 200px;
            border-radius: 4px;
            margin-top: 1em;
            display: none;
        }

        input {
            padding: 0.7em;
            box-sizing: border-box;
            border: 2px solid #3498db;
            border-radius: 4px;
            margin: 0.5em 0;
            color: #6c757d;
            width: 300px;
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

        hr {
            border: none;
            border-bottom: 1px solid #3498db;
            width: 100%;
            margin: 1em 0;
        }

        hr.section-divider {
            margin-top: 0;
        }

        select.custom-input {
            padding: 0.7em;
            box-sizing: border-box;
            border: 2px solid #3498db;
            border-radius: 4px;
            margin: 0.5em 0;
            color: #6c757d;
            width: 300px;
        }
        span.invalid-feedback div strong {
            color: #ff4d4d;
        }
        .select2-container--default .select2-results__option[aria-selected=true] {
            color: #000000; /* لون النص الأسود */
        }
        .select2-container--default .select2-results__option {
            color: #000000; /* لون النص الأسود */
        }


        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: #007bff; /* لون خلفية العنصر المحدد */
            color: #fff; /* لون النص */
            border: 1px solid #007bff; /* لون الحدود */
            border-radius: 5px; /* شكل الحواف */
            margin-right: 5px; /* التباعد بين العناصر */
        }




    </style>
</head>
<body>
<header>
    <h1>Admin Dashboard - Add Stores</h1>
</header>

<nav>
    <a href="{{url('admin')}}"><i class="fas fa-home"></i> Home</a> |
    <a href="{{url('viewStores')}}"><i class="fas fa-store"></i> Stores</a> |
    <a href="{{url('addStore')}}"><i class="fas fa-box"></i>  Add Stores</a> |
    <a href="{{url('deleteStore')}}"><i class="fas fa-shopping-cart"></i> Delete Stores</a>
</nav>

<section>
    <div>

        <div class="form-container">
            @if(session('status'))
                <div style="
        background-color: #d4edda; /* خلفية اللون */
        color: #155724; /* لون النص */
        border: 1px solid #c3e6cb; /* إطار الحدود */
        padding: 15px; /* تباعد الحواف الداخلية */
        margin: 20px 0; /* تباعد من الأعلى والأسفل */
        border-radius: 4px; /* شكل الحواف */
        font-size: 16px; /* حجم الخط */
    ">
                    {{ session('status') }}
                </div>
            @endif
            <h2>Add a New Manager</h2>
            <hr class="section-divider">
            <form action="{{url('/insertStore')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <div>
                        <label for="firstName"> First Name:</label>
                    </div>
                    <input type="text" id="firstName" name="firstName" required  class="form-control form-control-lg @error('firstName') is-invalid @enderror">
                    <di>
                    @error('firstName')
                </div>
                <span class="invalid-feedback" role="alert" >
                        <div>
                                        <strong>{{ $message }}</strong>
    </div>
                                    </span>
            @enderror
        </div>
        <div>
            <div>
                <label for="lastName"> Last Name:</label>
            </div>
            <input type="text" id="lastName" name="lastName" required class="form-control form-control-lg @error('lastName') is-invalid @enderror">
            <div>
                @error('lastName')
            </div>
            <span class="invalid-feedback" role="alert">
                        <div>
        <strong>{{ $message }}</strong>
    </div>
    </span>
            @enderror
        </div>
        <div>
            <div>
                <label for="email">Email Address:</label>
            </div>
            <input type="email" id="email" name="email" required class="form-control form-control-lg @error('email') is-invalid @enderror">
            <div>
                @error('email')
            </div>
            <span class="invalid-feedback" role="alert">
                        <div>
        <strong>{{ $message }}</strong>
    </div>
    </span>
            @enderror
        </div>
        <div>
            <div>
                <label for="phone"> Phone Number:</label>
            </div>
            <input type="tel" id="phone" name="phone" required class="form-control form-control-lg @error('phone') is-invalid @enderror">
            <div>
                @error('phone')
            </div>
            <span class="invalid-feedback" role="alert">
                        <div>
        <strong>{{ $message }}</strong>
        <div>
    </span>
            @enderror
        </div>
        <div>
            <div>
                <label for="password"> Password:</label>
            </div>
            <input type="password" id="password" name="password" required class="form-control form-control-lg @error('password') is-invalid @enderror">
            <div>
                @error('password')
            </div>
            <span class="invalid-feedback" role="alert">
                        <div>
        <strong>{{ $message }}</strong>
    </div>
    </span>
            @enderror
        </div>

        <div>
            <h2>Add a New Store</h2>
            <hr class="section-divider">

            <div>
                <div>
                    <label for="storeName">Store Name:</label>
                </div>
                <input type="text" id="storeName" name="storeName" required class="@error('storeName') is-invalid @enderror">
                <div>
                    @error('storeName')
                </div>
                <span class="invalid-feedback" role="alert">
                        <div>
                <strong>{{ $message }}</strong>
    </div>
            </span>
                @enderror
            </div>
            <div class="storelocation">
                <div>
                <label for="storeLocation">Store Location:</label>
                </div>
                <select id="storeLocation" name="storeLocation"  required class="custom-input @error('storeLocation') is-invalid @enderror">
                    <option value="" disabled selected>Select Store Location</option>
                    <option value="Saroujah">Saroujah</option>
                    <option value="Al-Qanawat">Al-Qanawat</option>
                    <option value="Jobar">Jobar</option>
                    <option value="Al-Midan">Al-Midan</option>
                    <option value="Al-Shaghour">Al-Shaghour</option>
                    <option value="Al-Qadam">Al-Qadam</option>
                    <option value="Kafr Sousa">Kafr Sousa</option>
                    <option value="Al-Mazza">Al-Mazza</option>
                    <option value="Barzeh">Barzeh</option>
                    <option value="Al-Qaboun">Al-Qaboun</option>
                    <option value="Rukn al-Din">Rukn al-Din</option>
                    <option value="Al-Salhiyya">Al-Salhiyya</option>
                    <option value="Al-Muhajireen">Al-Muhajireen</option>
                    <option value="Al-Yarmouk">Al-Yarmouk</option>
                </select>


                @error('storeLocation')
                <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                     </span>
                @enderror
            </div>
            <label for="category">Categories:</label>
            <div class="categories-container">
                <select id="category" name="categories[]" multiple required class="custom-input @error('categories') is-invalid @enderror">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('categories')
                <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
                @enderror
            </div>


            <!-- ... الأكواد السابقة ... -->
            <div class="file-upload-container">
                <div class="upload-btn-wrapper">
                    <button class="btn" type="button" onclick="document.getElementById('myFile').click();">Choose image</button>
                    <input type="file"  id="myFile" name="filename" required style="display:none;" onchange="displayImage(this);">
                </div>
                <div class="image-container">
                    <div>
                        <img id="uploadedImage" style="border-radius: 4px;">
                    </div>
                </div>
                @error('filename')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            <div>
                <button type="submit">Add Manager and Store</button>
            </div>
            </form>
        </div>
</section>

<script>
    function displayImage(input) {
        var file = input.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('uploadedImage').src = e.target.result;
                document.getElementById('uploadedImage').style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    }
    $(document).ready(function() {
        // Initialize Select2 on the select element with multiple attribute
        $('#category').select2({
            // Add options here if needed
        });
    });

</script>
</body>
</html>
