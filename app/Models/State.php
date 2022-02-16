<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $fillable =['name','description'];
    public function countries(){
        return $this->belongsTo(Country::class,'country_id');
    }

    public function cities(){
        return $this->hasMany(City::class);
    }
}
