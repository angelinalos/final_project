<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    protected $fillable =['title', 'description', 'tags', 'location', 'user_id'];
    use HasFactory;
    public function scopeFilter($tags, array $filter) {
        if($filter['tag'] ?? false) {
            $tags->where('tags', 'like', '%' . request('tag') . '%');
        }

        if($filter['search'] ?? false) {
            $tags->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

}
