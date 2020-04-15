<?php

namespace App\Http\Controllers;

use App\Covid;
use Illuminate\Http\Request;
use View;
use DB;

class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $covids = covid::latest()->paginate(5);

  

        return view('covids.index',compact('covids'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $covids = covid::all();
        return view('covids.create', compact('covids'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->nama;
        $y1 = $request->y1;
        $y2 = $request->y2;
        $y3 = $request->y3;
        $y4 = $request->y4;
        $y5 = $request->y5;
        $y6 = $request->y6;
        $y6 = $request->y6;
        $y7 = $request->y7;
        $y8 = $request->y8;
        $y9 = $request->y9;
        $y10 = $request->y10;
        $y11 = $request->y11;
        $y12 = $request->y12;
        $y13 = $request->y13;
        $y14 = $request->y14;
        $y15 = $request->y15;
        $y16 = $request->y16;
        $y17 = $request->y17;
        $y18 = $request->y18;
        $y19 = $request->y19;
        $y20 = $request->y20;
        $y21 = $request->y21;

        $y = $y1 + $y2 + $y3 + $y4 + $y5 + $y6 + $y7 + $y8 + $y9 + $y10 + $y11 + $y12 + $y13 + $y14 + $y15 + $y16 + $y17 + $y18 + $y19 + $y20 + $y21;

        DB::beginTransaction();
        $covids = new covid();
        $covids->a1 = $y;
        $covids->nama = $nama;
        $covids->a2 = 0;
        $covids->save();

        DB::commit();
        return view::make('covids.result',compact('covids'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function show(Covid $covid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function edit(Covid $covid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Covid $covid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Covid $covid)
    {
        //
    }
}
