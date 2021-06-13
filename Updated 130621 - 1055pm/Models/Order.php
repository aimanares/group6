<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'customer_id',
        'rider_id',
        'food_id',
    ];

    public function cafes(){
        return $this->belongsTo(Cafe::class);
    }

    public function riders(){
        return $this->belongsTo(Rider::class); 
    }

    public function users(){
        return $this->belongsTo(Customer::class);
    }
}