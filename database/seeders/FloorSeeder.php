<?php

namespace Database\Seeders;

use App\Models\Zone;
use App\Models\Floor;
use App\Models\Tenant;
use Illuminate\Database\Seeder;

class FloorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Floor::factory()->times(3)->create()->each(function($q){
        Zone::factory()->times(4)->create(['floor_id' => $q->id])->each(function($zone){
            Tenant::factory()->times(5)->create([
                'zone_id' => $zone->id
            ]);
        });
       });
    }
}
