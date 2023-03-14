<?php

namespace App\Http\Controllers;

use App\WaliMurid;
use Illuminate\Http\Request;

class WaliMuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $walimurid = WaliMurid::all();
        return view('walimurid.index', compact('walimurid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('walimurid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = WaliMurid::create($request->all());
        return redirect('/walimurid');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WaliMurid  $waliMurid
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $walimurid = WaliMurid::find($id)->first();
        return view('walimurid.detail',compact('walimurid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WaliMurid  $waliMurid
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $walimurid = WaliMurid::find($id)->first();
        return view('walimurid.edit',compact('walimurid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WaliMurid  $waliMurid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WaliMurid $id)
    {
        $walimurid = WaliMurid::find($id);
        $walimurid->update($request->all());
        return redirect('/walimurid');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WaliMurid  $waliMurid
     * @return \Illuminate\Http\Response
     */
    public function destroy(WaliMurid $id)
    {
        $walimurid = Walimurid::destroy($id);
        return redirect('/walimurid');
    }
}
