<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['type_id', 'name', 'image' , 'description'];

    public function type_product(){
        return $this->belongsTo(TypeProduct::class,'type_id');
    }
    
    public function prices(){
        return $this->hasMany(Price::class);
    }

    public function currentPrice(){
        return $this->hasOne(Price::class)->latestOfMany();
    }
}
