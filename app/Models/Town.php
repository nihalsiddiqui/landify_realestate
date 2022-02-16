<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function listings()
    {
        return $this->hasMany(Listing::class);
    }

    public function admin()
    {
        return $this->belongsTo(admin::class);
    }
}
