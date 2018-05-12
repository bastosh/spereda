<?php

namespace App;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($message)
    {
        //$this->comments()->create(compact('message'));
        Comment::create([
            'message' => $message,
            'post_id' => $this->id,
            'user_id' => auth()->id()
        ]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
