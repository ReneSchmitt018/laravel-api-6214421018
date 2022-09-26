<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\threads_details;
use Illuminate\Http\Request;

class ThreadsDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return threads_details::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return threads_details::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return threads_details::find($id);
    }

    public function showDGD()
    {   
        $threads = DB::table('threads_details')->select('*')->where('threads_id','=',4)->get();
        return $threads;
    }

    public function showDI()
    {   
        $threads = DB::table('threads_details')->select('*')->where('threads_id','=',6)->get();
        return $threads;
    }

    public function showDS()
    {   
        $threads = DB::table('threads_details')->select('*')->where('threads_id','=',7)->get();
        return $threads;
    }

    public function showDM()
    {   
        $threads = DB::table('threads_details')->select('*')->where('threads_id','=',8)->get();
        return $threads;
    }

    public function showDV()
    {   
        $threads = DB::table('threads_details')->select('*')->where('threads_id','=',9)->get();
        return $threads;
    }

    public function showDCR()
    {   
        $threads = DB::table('threads_details')->select('*')->where('threads_id','=',10)->get();
        return $threads;
    }

    public function showDSP()
    {   
        $threads = DB::table('threads_details')->select('*')->where('threads_id','=',11)->get();
        return $threads;
    }

    public function showDB()
    {   
        $threads = DB::table('threads_details')->select('*')->where('threads_id','=',12)->get();
        return $threads;
    }

    public function showDO()
    {   
        $threads = DB::table('threads_details')->select('*')->where('threads_id','=',5)->get();
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
        $threads_details = threads_details::find($id);
        $threads_details->update($request->all());
        return $threads_details;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return threads_details::destroy($id);
    }
}
