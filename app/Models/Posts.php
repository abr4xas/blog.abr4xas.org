<?php

namespace App\Models;

use Carbon\Carbon;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;

class Posts extends Model
{

    use HasSlug, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'title',
        'description',
        'image',
        'content',
        'user_id',
        'active',
        'slug'
    ];


    public function scopePublished(Builder $query)
    {
        $query->where('active', true);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getImageAttribute($value)
    {
        return !is_null($value) ? asset($value) : asset('/img/bg/feature-image.png');
    }

    public function toArray()
    {
        return [
            'title'         => $this->title,
            'image'         => $this->image,
            'description'   => $this->description,
            'slug'          => $this->slug,
            'category'      => $this->category->name,
            'custom_date'   => Carbon::parse($this->created_at)->format('F d,Y'),
            'datetime'      => Carbon::parse($this->created_at)->format('Y-m-d'),
        ];
    }
}
