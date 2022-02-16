<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    public function listing(){
        return $this->belongsToMany(Listing::class)->withPivot('name', 'distance', 'min_grade', 'max_grade', 'rating', 'map_location', 'lat', 'lng', 'facility_id')->withTimestamps();
    }
    public function property(){
        return $this->belongsToMany(Property::class);
    }

    public function admin()
    {
        return $this->belongsTo(admin::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
