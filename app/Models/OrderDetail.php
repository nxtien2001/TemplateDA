<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $fillable = ['order_id', 'product_id', 'quantity', 'unit_id'];
    public function order()
    {
        return $this->belongsTo(Order::class, 'order', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    }
}
