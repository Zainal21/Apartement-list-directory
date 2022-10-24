<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tenant extends Model
{
    use Uuids;
    use HasFactory;

    public function zone()
    {
        return $this->belongsTo(Zone::class, 'zone_id', 'id');
    }
}
