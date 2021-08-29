<?php

namespace App\Http\Controllers;

use App\Http\Requests\DotaProductCreateRequest;
use App\Http\Resources\DotaProductResource;
use App\Models\DotaProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DotaProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = DotaProduct::get();

        return DotaProductResource::collection($product);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DotaProductCreateRequest $request)
    {
        $product = DotaProduct::create([
            'name' => $request->get('name'),
            'slot' => $request->get('slot'),
            'price' => $request->get('price'),
            'rarity' => $request->get('rarity'),
            'image' => $request->get('image'),
            'user_id' => Auth::user() ? Auth::id() : null
        ]);

        return DotaProductResource::make($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DotaProduct  $dotaProduct
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = DotaProduct::findOrFail($id);

        return DotaProductResource::make($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DotaProduct  $dotaProduct
     * @return \Illuminate\Http\Response
     */
    public function update(DotaProductCreateRequest $request,$id)
    {
        $products = DotaProduct::findOrFail($id);
        $products->fill($request->only(['name','slot','price','rarity','image']));
        $products->save();

        return DotaProductResource::make($products);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DotaProduct  $dotaProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = DotaProduct::findOrFail($id);
        $products->delete();

        return DotaProductResource::make($products);
    }
}
