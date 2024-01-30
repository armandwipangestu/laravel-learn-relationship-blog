<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function currentPricing(): HasOne
    {
        return $this->hasOne(Price::class)->ofMany([
            'published_at' => 'max',
            'id' => 'max',
        ], function (Builder $query) {
            $query->where('published_at', '<', now());
        });
    }
}
