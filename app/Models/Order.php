<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['emp_id', 'guest_id', 'created_at' , 'update_at', 'status'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function items(){
        return $this->hasMany(OrderItem::class);
    }

    public function guest(){
        return $this->belongsTo(User::class, 'guest_id');
    }

    public function employee(){
        return $this->belongsTo(User::class, 'emp_id');
    }
    public function getSubtotalAttribute()
    {
        $subtotal = 0;

        foreach ($this->items as $item) {
            $subtotal = $subtotal + ($item->price->price * $item->quantity);
        }

        return $subtotal;
    }
    // public function getNameAttribute()
    // {
    //     $subtotal = 0;

    //     foreach ($this->items as $item) {
    //         $subtotal = $subtotal + ($item->price->price * $item->quantity);
    //     }

    //     return $subtotal;
    // }
}
