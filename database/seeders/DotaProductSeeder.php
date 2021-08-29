<?php

namespace Database\Seeders;

use App\Models\DotaProduct;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DotaProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DotaProduct::create([
            'name' => 'Reapers Wreath',
            'slot' => 'Gun',
            'price' => 100,
            'rarity' => 'rare',
            'image' => null,
            'user_id' => 1,
        ]);
    }
}
