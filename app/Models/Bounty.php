<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bounty extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'price'];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
