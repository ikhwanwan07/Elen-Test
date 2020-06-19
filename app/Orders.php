<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use SoftDeletes;
    protected $table = "orders";
    protected $fillable = ['id', 'product_id', 'qty', 'total', 'nama', 'phone', 'alamat'];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
