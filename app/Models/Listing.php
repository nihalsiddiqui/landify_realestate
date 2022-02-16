<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Listing extends Model
{
    use HasFactory;

    protected $casts = [
        'images' => 'array',
    ];

    protected $hidden = ['images'];

    public function scopeActive(Builder $builder, $value)
    {
        $builder->where('status', $value);
    }

    public function scopeSpeciality(Builder $builder, $column, $bool)
    {
        $builder->where($column, $bool);
    }

    public function categories()
    {
        return $this->belongsToMany(category::class, 'listing_category')->withTimestamps();
    }

    public function town()
    {
        return $this->belongsTo(Town::class, 'town_id');
    }

    public function property()
    {
        return $this->belongsToMany(Property::class, 'property_listings');
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'listing_features')->withPivot('count', 'feature_id')->withTimestamps();
    }

    public function facility()
    {
        return $this->belongsToMany(Facility::class, 'listing_facilities')->withPivot('name', 'distance', 'min_grade', 'max_grade', 'rating', 'map_location', 'lat', 'lng', 'facility_id')->withTimestamps();
    }

    public function admin()
    {
        return $this->belongsTo(admin::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appliances()
    {
        return $this->belongsToMany(Appliance::class, 'listing_appliances')->withPivot('count', 'description')->withTimestamps();
    }


}
