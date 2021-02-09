<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body','image','user_id'];

    // protected $guarded = [];

    protected $hidden = ['updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function getImageAttribute($value)
    {
        return $value ? asset($value) : null;
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function commentsWithReplies()
    {
        return $this->comments()->with('replies');
    }

    public function likes()
    {
        return $this->morphMany(Like::class,'likeable');
    }
}