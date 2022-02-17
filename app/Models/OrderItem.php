<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = ['order_id','price_id','quantity', 'note'];
    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function price(){
        return $this->belongsTo(Price::class);
    }
}
