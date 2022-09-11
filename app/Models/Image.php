<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ["section_id", "image"];
    public function section()
    {
        return $this->belongsTo('App\Model\Section');
    }
}
