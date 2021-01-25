<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $with = ['categories','editors'];

    protected $fillable = ['name', 'description', 'image', 'status', 'viewer','cover','user_id'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'category_article');
    }
    public function editors()
    {
        return $this->belongsToMany('App\Models\User', 'articles_editors');
    }


    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($article) {
            $article->slug = Str::slug($article->name);
        });
    }
}
