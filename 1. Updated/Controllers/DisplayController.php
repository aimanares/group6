<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class DisplayController extends Controller
{
    function show()
    {
        $data =  Order::all();
        return view('riderDisplay',['orders' => $data]);
    }
}