<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Career extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'location',
        'website',
        'company_name',
        'tags',
        'salary',
        'job_type'
    ];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%')
                ->orWhere('location', 'like', '%' . request('search') . '%')
                ->orWhere('job_type', 'like', '%' . request('search') . '%')
                ->orWhere('website', 'like', '%' . request('search') . '%')
                ->orWhere('company_name', 'like', '%' . request('search') . '%');
        }

        if ($filters['tags'] ?? false) {
            $query->where('tags', 'like', '%' . request('tags') . '%');
        }

        if ($filters['title'] ?? false) {
            $query->where('title', 'like', '%' . request('title') . '%');
        }

        if ($filters['location'] ?? false) {
            $query->where('location', 'like', '%' . request('location') . '%');
        }

        if ($filters['job_type'] ?? false) {
            $query->where('job_type', 'like', '%' . request('job_type') . '%');
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
