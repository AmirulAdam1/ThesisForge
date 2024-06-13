<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Staff;
use App\Models\Mentor;
use App\Models\Platinum;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'email', 'password', 'phone', 'profile_photo'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function platinum(): HasOne
    {
        return $this->hasOne(Platinum::class);
    }

    public function staff(): HasOne
    {
        return $this->hasOne(Staff::class);
    }

    public function mentor(): HasOne
    {
        return $this->hasOne(Mentor::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if($filters['role'] ?? false) {
            $query->where('role', 'like', '%' . request('role') . '%');
        }

        if($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%');
        }
    }
}
