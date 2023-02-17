<?php

namespace App\Models;

use App\Models\User;
use App\Models\Forum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'forum_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function forums()
    {
        return $this->belongsTo(Forum::class);
    }
}
