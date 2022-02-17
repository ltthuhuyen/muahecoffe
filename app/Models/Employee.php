<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['email', 'name_emp', 'sex' , 'DOB','CMND', 'tel', 'address' ];
    public function users(){
        return $this->belongsTo( User::class ,'email');
    }
}
