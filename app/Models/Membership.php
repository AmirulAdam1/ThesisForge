<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_type',
        'program_interested',
        'program_batch',
        'referral_exist',
        'referral_name',
        'referral_batch',
        'consent',
        'application_date',
        'transaction_proof',
    ];

    public function platinum(): BelongsTo
    {
        return $this->belongsTo(Platinum::class);
    }
}
