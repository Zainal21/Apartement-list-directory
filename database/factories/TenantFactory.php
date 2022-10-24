<?php

namespace Database\Factories;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenantFactory extends Factory
{

    protected $model = Tenant::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tenant_name'        => $this->faker->firstName,
            'tenant_lot_number'  => $this->faker->unique()->numberBetween(1, 100),
            'tenant_description' => $this->faker->sentence(10),
        ];
    }
}
