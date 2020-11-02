<?php

namespace Database\Factories;

use App\Models\Murid;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MuridFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Murid::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nisn' => $this->faker->unique()->randomNumber(7),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->email(),
            'phone_number' => $this->faker->randomNumber(8),
            'address' => $this->faker->address(),
            'gender' => $this->faker->randomElement(["Male","Female"]),
            'kelas_id' => $this->faker->numberBetween($min = 1, $max = 4),
        ];
    }
}
