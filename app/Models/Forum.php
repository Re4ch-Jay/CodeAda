<?php

namespace App\Models;

use App\Models\Like;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'markdown',
        'user_id',
        'tag'
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query->where('tag', 'like', '%' . request('tag') . '%');
        }

        if ($filters['user'] ?? false) {
            $query->where('user_id', 'like', '%' . request('user') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tag', 'like', '%' . request('search') . '%');
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likedBy(User $user)
    {
        return $this->likes->contains('user_id', $user->id);
    }

    public function ownedBy(User $user)
    {
        return $user->id === $this->user_id;
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
