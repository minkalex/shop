<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStatusTypeRequest;
use App\Http\Requests\UpdateStatusTypeRequest;
use App\Models\StatusType;

class StatusTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreStatusTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStatusTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StatusType  $statusType
     * @return \Illuminate\Http\Response
     */
    public function show(StatusType $statusType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StatusType  $statusType
     * @return \Illuminate\Http\Response
     */
    public function edit(StatusType $statusType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStatusTypeRequest  $request
     * @param  \App\Models\StatusType  $statusType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStatusTypeRequest $request, StatusType $statusType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StatusType  $statusType
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatusType $statusType)
    {
        //
    }
}
