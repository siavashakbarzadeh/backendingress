<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Nft;
use App\Models\Order;
use Illuminate\Http\Request;

class ApiOrderController extends Controller
{
    public function show()
    {
        $orders=Order::all();
        return view('Orders/orders-show',compact('orders'));

    }
    public function store(Request $request)
    {

//        dd('ok');

        $nft = Order::create([

            'user_id' => $request['user_id'],
            'nft_id' => $request['nft_id'],
            'status' => $request['status'],
            'order_from' => $request['order_from'],



        ]);

    }
}
