<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    public function children()
    {
        return $this->hasMany(category::class, "parent_id");
    }

    public function parent()
    {
        return $this->belongsTo(category::class, "parent_id");
    }

    public function posts()
    {
        return $this->belongsToMany('App\Models\post', 'category_posts');
    }

    public function generics()
    {
        return $this->belongsToMany('App\Models\GenericCategories', 'generic_categories');
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function listing()
    {
        return $this->hasMany(Listing::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeCategories(Builder $builder)
    {
        return $builder->where('name', 'commercial')->orWhere('name', 'residential')->orWhere('name', 'agriculture');
    }

    public function admin()
    {
        return $this->belongsTo(admin::class);
    }

    public function subCategory(){
        return $this->hasMany(SubCategories::class);
    }
}
