<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{

    use HasSlug;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'locale',
        'slug',
        'color',
    ];

    public function post()
    {
        return $this->hasMany(Posts::class);
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug')
            ->allowDuplicateSlugs()
            ->doNotGenerateSlugsOnUpdate();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     *
     * @return string
     */
    public function getLocaleAttribute($valor)
    {
        return $this->attributes['locale'] = mb_strtolower($valor);
    }

    /**
     *
     * @return string
     */
    public function setNameAttribute($valor)
    {
        $this->attributes['name'] = mb_strtolower($valor);
    }

    public static function totalCategory()
    {
        return static::count();
    }

    public static function allCategories()
    {
        return static::all();
    }
}
