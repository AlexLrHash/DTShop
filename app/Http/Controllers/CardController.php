<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCardCreateRequest;
use App\Http\Requests\UserCardUpdateRequest;
use App\Http\Resources\UserCardResource;
use App\Models\UserCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $userCards =  UserCard::get();

       return UserCardResource::collection($userCards);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // TODO Сделать Middleware для пользователей
    public function store(UserCardCreateRequest $request)
    {
        $userCard = UserCard::create([
            'first_name' => $request->get('first_name'),
            'second_name' => $request->get('second_name'),
            'user_id' => Auth::user()->id,
            'number' => $request->get('number'),
            'date_to' => $request->get('date_to'),
            'cvv' => $request->get('cvv'),
        ]);

        return UserCardResource::make($userCard);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userCard = UserCard::findOrFail($id);

        return UserCardResource::make($userCard);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserCardUpdateRequest $request, $id)
    {
        $userCard = UserCard::findOrFail($id);
        $userCard->fill(array(
            'first_name' => $request->get('first_name'),
            'second_name' => $request->get('second_name'),
            'number' => $request->get('number'),
            'date_to' => $request->get('date_to'),
            'cvv' => $request->get('cvv'),
        ));
        $userCard->save();

        return UserCardResource::make($userCard);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userCard = UserCard::findOrFail($id);
        $userCard->delete();

        return UserCardResource::make($userCard);
    }
}
