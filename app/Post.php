<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $appends = ['likes_count', 'if_i_liked'];
    protected $fillable = ['description', 'image', 'user_id', 'title', 'like', 'category_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes', 'post_id', 'user_id');
    }

    public function getLikesCountAttribute()
    {
        return $this->likes()->count();
    }

    public function getIfILikedAttribute()
    {
        $user = \Auth::user() ?? \Auth::guard("api")->user();

        if($user) {
            return ($this->likes()->where('user_id', $user->id)->exists()) ?? true;
        }
        return false;
    }
}
