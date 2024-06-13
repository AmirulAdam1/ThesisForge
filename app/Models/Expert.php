<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Expert extends Model
{
    use HasFactory;

    protected $fillable = ['expert_name', 'domain_name', 'expert_university', 'expert_email', 'expert_phone_number'];

    public function platinum(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if($filters['search'] ?? false) {
            $query->where('expert_name', 'like', '%' . request('search') . '%');
        }

        if($filters['id'] ?? false) {
            $query->where('platinum_id', auth()->id());
        }
    }
}