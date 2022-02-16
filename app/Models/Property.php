<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(category::class,'category_id');
    }
    public function company(){
        return $this->belongsTo(category::class,'sub_category_id');
    }
    public function town(){
        return $this->belongsTo(Town::class,'town_id');
    }
    public function createdBy(){
        return $this->belongsTo(admin::class,'created_by',);
    }
    public function updateBy(){
        return $this->belongsTo(admin::class,'updated_by');
    }
    public function projects(){
        return $this->belongsToMany(Project::class)->withTimestamps();
    }
    public function listings(){
        return $this->belongsToMany(Listing::class);
    }
    public function features(){
        return $this->belongsToMany(Feature::class);
    }
    public function facilities(){
        return $this->belongsToMany(Facility::class);
    }

    public function admin()
    {
        return $this->belongsTo(admin::class);
    }
}
