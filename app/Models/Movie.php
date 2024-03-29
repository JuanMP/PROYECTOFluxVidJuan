<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //ACT 9 EDITAR
    protected $fillable = [
        'title',
        'year',
        'plot',
        'rating',
    ];

    public function Director(){
        return $this->belongsTo(Director::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
