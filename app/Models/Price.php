<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Price extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['product_id', 'price', 'apply'];
    protected $casts = [
        'apply' => 'datetime',
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function items(){
        return $this->hasMany(OrderItem::class);
    }
}
