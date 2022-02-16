<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public function town(){
        return $this->belongsTo(Town::class,'town_id');
    }
    public function ComponyRole(){
        return $this->belongsTo(CompanyRole::class,'company_role_id');
    }
    public function companyProjects(){
        return $this->belongsToMany(Project::class,"company_projects");
    }
}
