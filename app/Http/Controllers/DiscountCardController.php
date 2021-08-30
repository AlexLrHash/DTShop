<?php

namespace App\Http\Controllers;

use App\Models\DiscountCard;
use Illuminate\Http\Request;

class DiscountCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $card = DiscountCard::all();

        return $card;
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
     * @param  \App\Models\DiscountCard  $discountCard
     * @return \Illuminate\Http\Response
     */
    public function show(DiscountCard $discountCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DiscountCard  $discountCard
     * @return \Illuminate\Http\Response
     */
    public function edit(DiscountCard $discountCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DiscountCard  $discountCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DiscountCard $discountCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DiscountCard  $discountCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(DiscountCard $discountCard)
    {
        //
    }
}
