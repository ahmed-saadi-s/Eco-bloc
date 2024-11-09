<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Store.php

class Store extends Model
{
    protected $fillable = ['name', 'location','description','managerID'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function manager()
    {
        return $this->belongsTo(User::class, 'managerID');
    }
}

