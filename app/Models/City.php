<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function town()
    {
        return $this->hasMany(Town::class);
    }

    public function admin()
    {
        return $this->belongsTo(admin::class);
    }
}
