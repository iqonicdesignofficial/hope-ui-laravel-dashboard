<?php

namespace Database\Factories;

use App\Models\UserProfile;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserProfile::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $user_id = 1;
        return [
            'company_name' => $this->faker->words(2,true),
            'country' => $this->faker->country,
            'user_id' => $user_id++
        ];
    }
}
