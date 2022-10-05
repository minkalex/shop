<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeliveryTypeRequest;
use App\Http\Requests\UpdateDeliveryTypeRequest;
use App\Models\DeliveryType;

class DeliveryTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreDeliveryTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeliveryTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryType  $deliveryType
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryType $deliveryType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeliveryType  $deliveryType
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryType $deliveryType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeliveryTypeRequest  $request
     * @param  \App\Models\DeliveryType  $deliveryType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeliveryTypeRequest $request, DeliveryType $deliveryType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeliveryType  $deliveryType
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryType $deliveryType)
    {
        //
    }
}
