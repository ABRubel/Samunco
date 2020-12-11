<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function category()
    {
        return $this->hasOne('App\Models\Cateogry');
    }

    public function getAllProduct()
    {
        return $this->all('id', 'name', 'amount', 'quantity', 'image');
    }

}
