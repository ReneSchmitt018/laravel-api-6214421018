<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\threads;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return threads::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return threads::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return threads::find($id);
    }

    public function showGD()
    {   
        $threads = DB::table('threads')->select('*')->where('board_id','=',2)->get();
        return $threads;
    }
    public function showI()
    {   
        $threads = DB::table('threads')->select('*')->where('board_id','=',3)->get();
        return $threads;
    }
    public function showS()
    {   
        $threads = DB::table('threads')->select('*')->where('board_id','=',4)->get();
        return $threads;
    }
    public function showM()
    {   
        $threads = DB::table('threads')->select('*')->where('board_id','=',5)->get();
        return $threads;
    }
    public function showV()
    {   
        $threads = DB::table('threads')->select('*')->where('board_id','=',6)->get();
        return $threads;
    }
    public function showCR()
    {   
        $threads = DB::table('threads')->select('*')->where('board_id','=',7)->get();
        return $threads;
    }
    public function showSP()
    {   
        $threads = DB::table('threads')->select('*')->where('board_id','=',8)->get();
        return $threads;
    }
    public function showB()
    {   
        $threads = DB::table('threads')->select('*')->where('board_id','=',9)->get();
        return $threads;
    }
    public function ShowO()
    {   
        $threads = DB::table('threads')->select('*')->where('board_id','=',10)->get();
        return $threads;
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
        $threads = threads::find($id);
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
        return threads::destroy($id);
    }
}
