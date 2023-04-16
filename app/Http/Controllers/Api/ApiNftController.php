<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Nft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiNftController extends Controller
{
    public function show(Nft $nft)
    {
        $nfts=Nft::all();
        return view('Nfts/nfts-show',compact('nfts'));
    }
    public function store(Request $request)
    {
//        dd($request->all());
//        dd('ok');

        $nft = Nft::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'category' => $request['category'],
            "price"=>$request['price'],
            'photo' => $request['photo'],
            'mint_address' => $request['mint_address'],
            'status' => $request['status'],
            'user_id' => $request->user()->id,



        ]);

        return response()->json([
            'nfts'=>$nft
        ]);

    }
}
