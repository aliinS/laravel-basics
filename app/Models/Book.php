<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function authors(): BelongsToMany
    {
        return $this->belongsToMany(Author::class);
    }


    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
