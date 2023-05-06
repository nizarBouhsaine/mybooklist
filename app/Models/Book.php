<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{   protected $fillable = ['title','author','language','genre','cover','synopsis'];
    
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('status', 'rating');
    }

    public function scopeFilter($query, array $filters)
    {
        if($filters['genre'] ?? false)
        {
            $query->where('genre','like','%'.request('genre').'%');
        }

        if($filters['search'] ?? false)
        {
            $query->where('title','like','%'.request('search').'%')
                  ->orwhere('author','like','%'.request('search').'%');
        }
    }
    
    use HasFactory;
}
