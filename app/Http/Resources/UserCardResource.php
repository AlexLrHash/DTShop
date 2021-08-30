<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserCardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'first_name'=> $this->first_name,
            'second_name'=> $this->second_name,
            'user' => $this->user,
            'number' => $this->number,
            'date_to' =>$this->date_to
        ];
    }
}
