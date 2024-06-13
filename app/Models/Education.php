<?php

namespace App\Models;

use Awobaz\Compoships\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    
    protected  $table = 'educations';

    protected $fillable = [
        'current_level',
        'field',
        'institute',
        'occupation',
        'study_sponsorship',
    ];

    public function platinum(): BelongsTo
    {
        return $this->belongsTo(Platinum::class, 'platinum_id');
    }
}
