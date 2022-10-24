<?php

namespace Database\Factories;

use App\Models\Floor;
use Illuminate\Database\Eloquent\Factories\Factory;

class FloorFactory extends Factory
{
    protected $model = Floor::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $year = date('y');
        $month = date('m');
        
        return [
            'floor_code' => $this->faker->unique()->numerify('FLOOR'.$month.$year.'###'),
            'floor_name' => $this->faker->unique()->numerify('TTY-###'),
            'floor_description' => $this->faker->sentence(10),
        ];
    }
}
