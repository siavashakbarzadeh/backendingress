<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Slider;
use App\Models\User;
use App\Models\Nft;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagename='Slider Information ';
        return view('Sliders/sliders-create',compact('pagename'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSliderRequest  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
//        dd('ok');

        $sliders=Slider::all();

        $pagename='Slider Information ';
        return view('Sliders/sliders-show',compact('sliders','pagename'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSliderRequest  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
