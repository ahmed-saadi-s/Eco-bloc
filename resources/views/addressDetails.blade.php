@extends('layouts.master')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 border-right">
                <h2 class="mb-4">Your Shopping Cart</h2>

                @if(session('cart') && count(session('cart')) > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(session('cart') as $productId => $product)
                                <tr data-item-id="{{ $productId }}">
                                    <td>{{ $product['product_name'] }}</td>
                                    <td>
                                        <span class="quantity-text">{{ $product['quantity'] }}</span>
                                    </td>
                                    <td class="price">${{ number_format($product['price'], 2) }}</td>
                                    <td class="total"> ${{ number_format($product['quantity'] * $product['price'], 2) }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3" class="text-right"><strong>Total</strong></td>
                                <td id="cart-total">${{ number_format(array_sum(array_map(function($product) {
                                    return $product['price'] * $product['quantity'];
                                }, session('cart'))), 2) }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right"><strong>Delivery Fee (2.5%)</strong></td>
                                <td id="delivery-fee">${{ number_format(array_sum(array_map(function($product) {
                                    return $product['price'] * $product['quantity'];
                                }, session('cart'))) * 0.025, 2) }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right"><strong>Total Including Delivery</strong></td>
                                <td id="total-with-delivery">${{ number_format(array_sum(array_map(function($product) {
                                    return $product['price'] * $product['quantity'];
                                }, session('cart'))) * 1.025, 2) }}</td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                @else
                    <p>Your cart is currently empty.</p>
                @endif
            </div>

            <div class="col-md-6">
                <h2 class="mb-4">Delivery Information</h2>

                <form action="{{url('orderConfirmation')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="building">Building</label>
                        <input type="text" class="form-control" id="building" name="building" required>
                    </div>
                    <!-- يمكنك إضافة المزيد من حقول الفورم حسب احتياجاتك -->

                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-success">Complete Purchase</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
