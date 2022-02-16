<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyProject extends Model
{
    use HasFactory;

//    public function company(){
//        return $this->belongsTo(Company::class,'company_id');
//    }
//    public function project(){
//        return $this->belongsTo(Project::class,'project_id');
//    }
}
