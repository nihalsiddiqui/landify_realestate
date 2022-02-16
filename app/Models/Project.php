<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function companies(){
        return $this->belongsToMany(Company::class,"company_projects");
    }
    public function property(){
        return $this->belongsToMany(Property::class);
    }
}
