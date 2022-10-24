<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zone extends Model
{
    use Uuids;
    use HasFactory;


    public function floor()
    {
        return $this->belongsTo(Floor::class, 'floor_id', 'id');
    }

    public function tenant()
    {
        return $this->hasMany(Tenant::class, 'zone_id', 'id');
    }
}
