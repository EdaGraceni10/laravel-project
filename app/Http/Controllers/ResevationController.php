<?php

namespace App\Http\Controllers;

use App\Models\Resevation;
use App\Http\Requests\StoreResevationRequest;
use App\Http\Requests\UpdateResevationRequest;

class ResevationController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreResevationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResevationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resevation  $resevation
     * @return \Illuminate\Http\Response
     */
    public function show(Resevation $resevation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resevation  $resevation
     * @return \Illuminate\Http\Response
     */
    public function edit(Resevation $resevation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateResevationRequest  $request
     * @param  \App\Models\Resevation  $resevation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateResevationRequest $request, Resevation $resevation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resevation  $resevation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resevation $resevation)
    {
        //
    }
}
