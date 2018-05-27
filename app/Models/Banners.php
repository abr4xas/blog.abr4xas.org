<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 
        'content',
    ];
    public static function getBanner()
    {
        return static::orderByRaw("RAND()")->first();
    }
}
