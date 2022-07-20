<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Middleware\ApisEx;

class OrderController extends Controller
{
    public function order ()  {
        if(ApisEx::class) {
            return Order::all();
        }
    }
}
