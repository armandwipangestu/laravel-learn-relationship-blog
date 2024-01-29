<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function phone(): HasOne
    {
        return $this->hasOne(Phone::class);
    }

    public function latestOrder(): HasOne
    {
        return $this->hasOne(Order::class)->latestOfMany();
    }

    public function oldestOrder(): HasOne
    {
        return $this->hasOne(Order::class)->oldestOfMany();
    }

    // public function largestOrder(): HasOne
    // {
    //     return $this->hasOne(Order::class)->ofMany('price', 'max');
    // }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    // Converting "Many" Relationship to Has One Relationship
    public function largestOrder(): HasOne
    {
        return $this->orders()->one()->ofMany('price', 'max');
    }
}
