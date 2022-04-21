<?php

namespace App\Http\Controllers;

use App\Models\Szakdoga;
use Illuminate\Http\Request;

class SzakdogaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $szakdoga = Szakdoga::all();
        return $szakdoga;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $szakdoga = new Szakdoga();
        $szakdoga->id = $request->id;
        $szakdoga->szakdoga_nev = $request->szakdoga_nev;
        $szakdoga->githublink = $request->githublink;
        $szakdoga->oldallink = $request->oldallink;
        $szakdoga->tagokneve = $request->tagokneve;
        $szakdoga->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Szakdoga  $szakdoga
     * @return \Illuminate\Http\Response
     */
    public function show(Szakdoga $szakdogaId)
    {
        $szakdoga = Szakdoga::find($szakdogaId);
        return $szakdoga;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Szakdoga  $szakdoga
     * @return \Illuminate\Http\Response
     */
    public function edit(Szakdoga $szakdoga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Szakdoga  $szakdoga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $szakdogaId)
    {
        $szakdoga = Szakdoga::find($szakdogaId);
        $szakdoga->id = $request->id;
        $szakdoga->szakdoga_nev = $request->szakdoga_nev;
        $szakdoga->githublink = $request->githublink;
        $szakdoga->oldallink = $request->oldallink;
        $szakdoga->tagokneve = $request->tagokneve;
        $szakdoga->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Szakdoga  $szakdoga
     * @return \Illuminate\Http\Response
     */
    public function destroy($szakdogaId)
    {
        $szakdoga = Szakdoga::find($szakdogaId);
        $szakdoga->delete();
    }
}
