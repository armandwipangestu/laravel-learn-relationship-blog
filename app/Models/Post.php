<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function user(): BelongsTo
    {
        // Default Models: Array Version
        return $this->belongsTo(User::class)->withDefault([
            'name' => 'Guest Author'
        ]);

        // Default Models: Closure Version
        // return $this->belongsTo(User::class)->withDefault(function (User $user, Post $post) {
        //     $user->name = 'Guest Author';
        // });
    }
}
