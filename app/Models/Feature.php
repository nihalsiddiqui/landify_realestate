<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    public function listing()
    {
        return $this->belongsToMany(Listing::class)->withPivot('count', 'feature_id')->withTimestamps();
    }

    public function property()
    {
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
