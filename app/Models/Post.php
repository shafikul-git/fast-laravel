<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];  
    
    public function tag() {
        return $this->morphToMany(Tag::class, "tagable");
    }
    
    public function video() {
        return $this->hasMany(Video::class);
    }
}
