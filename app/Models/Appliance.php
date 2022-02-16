<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appliance extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'description','admin_id'];

    public function listing()
    {
        return $this->belongsToMany(Listing::class)->withPivot('count','description')->withTimestamps();
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
