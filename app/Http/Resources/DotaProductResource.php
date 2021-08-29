<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DotaProductResource extends JsonResource
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
            'name' => $this->name,
            'slot' => $this->slot,
            'price' => $this->price,
            'rarity'=>$this->rarity,
            'image' => $this->image,
            'baskets'=> $this->baskets,
        ];
    }
}
