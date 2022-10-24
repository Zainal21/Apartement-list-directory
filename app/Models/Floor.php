<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Floor extends Model
{
    use Uuids;
    use HasFactory;

    public function tenant()
    {
        return $this->hasManyThrough(
                Tenant::class,
                Zone::class,
                'floor_id',// Foreign key on the zone table...
                'zone_id',// Foreign key on the tenant table...
                'id',
                'id',
            );
    }

    public function zone()
    {
        return $this->hasMany(Zone::class, 'floor_id', 'id');
    }
}
