<?php

namespace App\Models;

use App\Models\User;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Platinum extends Model
{
    use HasFactory;

    protected $fillable = ['staff_id', 'title', 'identity_card', 'gender', 'religion', 'race', 'citizenship',
                            'address', 'city', 'state', 'postcode', 'country', 'facebook_name'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }

    public function education(): HasOne
    {
        return $this->hasOne(Education::class, 'platinum_id');
    }

    public function membership(): HasOne
    {
        return $this->hasOne(Membership::class);
    }

    public function experts(): HasMany
    {
        return $this->hasMany(Expert::class, 'platinum_id');
    }
}
