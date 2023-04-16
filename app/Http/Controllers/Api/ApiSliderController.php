<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class ApiSliderController extends Controller
{
    public function store(Request $request)
    {

//        dd($request->all());

        $slider = Slider::create([
            'name' => $request['name'],
            'nft_id' => $request['nft_id'],
            'short_description' => $request['short_description'],
            'long_desc_header' => $request['long_desc_header'],
            'long_desc_middle' => $request['long_desc_middle'],
            'long_desc_footer' => $request['long_desc_footer'],
            'photo' => $request['photo'],

        ]);

        return redirect('sliders-show')->with('success', __('Slider Successfully created!'));
    }
}
