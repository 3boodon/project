<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = ["name", "description"];
    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }
    public function videos()
    {
        return $this->hasMany('App\Models\Video');
    }
}
