<?php

namespace App\Traits;

use App\Models\ShoppingCart;

trait CountsCartItems
{
    public function getCartItemCount($userId)
    {
        return ShoppingCart::where('user_id', $userId)->count();
    }
}
