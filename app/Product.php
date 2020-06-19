<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    protected $table = "products";
    protected $fillable = ['id', 'nama', 'price'];

    public function order()
    {
        return $this->hasMany(Orders::class);
    }
}
