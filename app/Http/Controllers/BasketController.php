<?php

namespace App\Http\Controllers;

use App\Http\Resources\BasketResource;
use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basket = Basket::all();

        return BasketResource::collection($basket);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $basket = Basket::where('token', $request->get('token'))->first();
        if (!$basket) {
            $basket = Basket::create([
                'user_id' => 1,
                'token' => Str::random(24),
            ]);
        }

        return BasketResource::make($basket);
    }

    public function add(Request $request, $id)
    {
        $basket = Basket::where('token', $request->get('token'))->first();
        if (!$basket) {
            $basket = Basket::create([
                'user_id' => 1,//1Auth:user()
                'token' => Str::random(24)
            ]);
        }
//
        if ($basket->products->contains($id)) {
            $pivotRaw = $basket->products->find($id)->pivot;
            $pivotRaw->count += 1;
            $pivotRaw->save();
        } else {
            $basket->products()->attach($id);
        }
        return BasketResource::make($basket);
    }

    public function destroy(Request $request, $id)
    {
        $basket = Basket::where('token', $request->get('token'))->first();
        if ($basket->products->contains($id)) {
            $pivotRaw = $basket->products->find($id)->pivot;
            if($pivotRaw->count > 1){
                $pivotRaw->count -= 1;
                $pivotRaw->save();
            }
            else {
                $basket->products()->detach($id);
            }
        }
        return BasketResource::make($basket);
    }
}
