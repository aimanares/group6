<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function staff(){
        return $this->hasMany(Staff::class);
    }

    public function foods(){
        return $this->hasMany(Food::class);
    }
}