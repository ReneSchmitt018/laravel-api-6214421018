<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\random_reload;
use Illuminate\Http\Request;

class RandomImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return random_reload::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return random_reload::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return random_reload::find($id);
    }

    public function showRandom()
    {   
        $random_reload = DB::table('random_reload')->select(DB::raw('*'))->orderBy(DB::raw('RAND ()'))->limit(1)->get();
        return $random_reload;
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
        $threads = random_reload::find($id);
        $threads->update($request->all());
        return $threads;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return random_reload::destroy($id);
    }
}
