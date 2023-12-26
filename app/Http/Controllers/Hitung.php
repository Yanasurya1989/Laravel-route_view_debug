<?php

namespace App\Http\Controllers;

use App\Models\Hitungs;
use Illuminate\Http\Request;

class Hitung extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tinggiAwal = 200;
        $lamaHari = 5;
        $pertumbuhanHarian = 5/100;

        $tambahTinggi = $pertumbuhanHarian * $lamaHari;
        $totalTinggi = $tinggiAwal + $tambahTinggi;

        return view('welcome', compact('totalTinggi'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hitungs  $hitungs
     * @return \Illuminate\Http\Response
     */
    public function show(Hitungs $hitungs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hitungs  $hitungs
     * @return \Illuminate\Http\Response
     */
    public function edit(Hitungs $hitungs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hitungs  $hitungs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hitungs $hitungs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hitungs  $hitungs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hitungs $hitungs)
    {
        //
    }
}
