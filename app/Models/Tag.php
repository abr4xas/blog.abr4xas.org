<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    use HasSlug;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'slug',
        'locale',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->allowDuplicateSlugs()
            ->doNotGenerateSlugsOnUpdate();
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    /**
     *
     * @return string
     */
    public function getLocaleAttribute($valor)
    {
        return $this->attributes['locale'] = mb_strtolower($valor);
    }


    public static function totalTag()
    {
        return static::count();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    } 
}
