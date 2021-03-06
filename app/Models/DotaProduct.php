<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DotaProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slot',
        'price',
        'rarity',
        'image'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    public function baskets()
    {
        return $this->belongsToMany(Basket::class, 'basket_dota_products', 'product_id', 'basket_id');
    }

}
