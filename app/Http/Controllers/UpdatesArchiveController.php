<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\updates_archive;
use Illuminate\Http\Request;

class UpdatesArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return updates_archive::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return updates_archive::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return updates_archive::find($id);
    }

    public function showInHome()
    {
        $updates_archive = DB::table('updates_archive')->orderBy('updated_at','asc')->limit(5)->get();
        return $updates_archive;
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
        $updates_archive = updates_archive::find($id);
        $updates_archive->update($request->all());
        return $updates_archive;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        return updates_archive::destroy($id);
    }
}
