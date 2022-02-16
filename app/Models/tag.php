<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    //
    public function posts()
    {
        return $this->belongsToMany('App\Models\post', 'post_tags');
    }

    public function generics()
    {
        return $this->belongsToMany('App\Models\GenericCategories', 'generic_categories');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function admin()
    {
        return $this->belongsTo(admin::class);
    }
}
