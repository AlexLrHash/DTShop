<?php

namespace Database\Factories;

use App\Models\UserCard;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserCardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserCard::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->randomDigit(),
            'first_name' => $this->faker->name(),
            'second_name' => $this->faker->name(),
            'number' => $this->faker->numerify('#### #### #### ####'),
            'date_to' => $this->faker->date('Y-m-d','1461067200'),
            'cvv' => $this->faker->randomDigit(),
        ];
    }
}
