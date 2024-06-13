<?php

namespace App\Models;

use App\Models\User;
use App\Models\Platinum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staffs';

    protected $fillable = ['address'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function platinums(): HasMany
    {
        return $this->hasMany(Platinum::class);
    }
}
