<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;

class admin extends Authenticatable
{
    use Notifiable, HasRoles , HasApiTokens;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function feature()
    {
        return $this->hasMany(Feature::class);
    }

    public function facility()
    {
        return $this->hasMany(Facility::class);
    }
    public function appliances()
    {
        return $this->hasMany(Appliance::class);
    }

    public function listing()
    {
        return $this->hasMany(Listing::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function towns()
    {
        return $this->hasMany(Town::class);
    }

    public function categories()
    {
        return $this->hasMany(category::class);
    }

    public function tags()
    {
        return $this->hasMany(tag::class);
    }
}
