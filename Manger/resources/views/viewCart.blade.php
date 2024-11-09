    @extends('layouts.master')

    @section('content')
        <div class="container mt-5">
            <h1 class="mb-4">Your Shopping Cart</h1>

            @if(session('cart') && count(session('cart')) > 0)

                <form action="{{ url('purchase') }}" method="post">
                    @csrf
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(session('cart') as $productId => $product)
                                <tr data-item-id="{{ $productId }}">
                                    <td>{{ $product['product_name'] }}</td>
                                    <td>
                                        <input type="number" min="1" name="quantity_{{ $productId }}" value="{{ $product['quantity'] }}" class="form-control quantity-input" data-price="{{ $product['price'] }}" data-item-id="{{ $productId }}">
                                    </td>
                                    <td class="price">${{ number_format($product['price'], 2) }}</td>
                                    <td class="total">${{ number_format($product['quantity'] * $product['price'], 2) }}</td>
                                    <td>
                                        <a href="{{ url('removeProduct') }}/{{ $productId }}" class="btn btn-danger btn-sm">Remove</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="3" class="text-right"><strong>Total</strong></td>
                                <td id="cart-total">${{ number_format(array_sum(array_column(session('cart'), 'price')) * array_sum(array_column(session('cart'), 'quantity')), 2) }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right"><strong>Delivery Fee (2.5%)</strong></td>
                                <td id="delivery-fee">${{ number_format(array_sum(array_column(session('cart'), 'price')) * array_sum(array_column(session('cart'), 'quantity')) * 0.025, 2) }}</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-right"><strong>Total Including Delivery</strong></td>
                                <td id="total-with-delivery">${{ number_format((array_sum(array_column(session('cart'), 'price')) * array_sum(array_column(session('cart'), 'quantity')) * 1.025), 2) }}</td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="text-right mt-4">
                        <button type="submit" class="btn btn-success btn-lg">Purchase Now</button>
                    </div>
                </form>


            @else
                <p>Your cart is currently empty.</p>
            @endif
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const quantityInputs = document.querySelectorAll('.quantity-input');
                const removeButtons = document.querySelectorAll('.remove-product');

                quantityInputs.forEach(input => {
                    input.addEventListener('change', function() {
                        const quantity = this.value;
                        const price = this.getAttribute('data-price');
                        const totalElement = this.parentElement.nextElementSibling.nextElementSibling;

                        totalElement.textContent = '$' + (quantity * price).toFixed(2);
                        updateCartTotal();
                    });
                });

                function updateCartTotal() {
                    const totalElements = document.querySelectorAll('.total');
                    let cartTotal = 0;

                    totalElements.forEach(element => {
                        cartTotal += parseFloat(element.textContent.replace('$', ''));
                    });

                    const deliveryFee = cartTotal * 0.025;
                    const totalWithDelivery = cartTotal + deliveryFee;

                    document.getElementById('cart-total').textContent = '$' + cartTotal.toFixed(2);
                    document.getElementById('delivery-fee').textContent = '$' + deliveryFee.toFixed(2);
                    document.getElementById('total-with-delivery').textContent = '$' + totalWithDelivery.toFixed(2);
                }
            });
        </script>
    @endsection
