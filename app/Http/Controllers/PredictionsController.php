<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prediction;

class PredictionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $predictions = Prediction::all();

        return view('predictions/index', [
            'predictions' => $predictions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('predictions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $predictions = Prediction::create([
            'id' => $request->input('id'),
            'first' => $request->input('first'),
            'second' => $request->input('second'),
            'third' => $request->input('third'),
            'fourth' => $request->input('fourth'),
            'fifth' => $request->input('fifth'),
            'sixth' => $request->input('sixth'),
            'seventh' => $request->input('seventh'),
            'eighth' => $request->input('eighth'),
            'nineth' => $request->input('nineth'),
            'tenth' => $request->input('tenth'),
        ]);
        return redirect('/predictions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prediction = Prediction::find($id)->first();
        
        return view('predictions.edit')->with('prediction', $prediction);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $predictions = Prediction::where('id',$id)
            ->update([
            'first' => $request->input('first'),
            'second' => $request->input('second'),
            'third' => $request->input('third'),
            'fourth' => $request->input('fourth'),
            'fifth' => $request->input('fifth'),
            'sixth' => $request->input('sixth'),
            'seventh' => $request->input('seventh'),
            'eighth' => $request->input('eighth'),
            'nineth' => $request->input('nineth'),
            'tenth' => $request->input('tenth'),
        ]);

        return redirect('/predictions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
