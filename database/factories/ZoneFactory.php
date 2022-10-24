<?php

namespace Database\Factories;

use App\Models\Zone;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZoneFactory extends Factory
{
    protected $model = Zone::class;
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
            'zone_code' => $this->faker->unique()->numerify('ZONE'.$month.$year.'###'),
            'zone_name' => 'Zone' . $this->faker->unique()->firstName,
            'zone_description' => $this->faker->sentence(24)
        ];
    }
}
