<?php

namespace App\Models;

use App\Models\InviteCode;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'activated_at'
    ];

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'activated_at' => 'datetime',
    ];

    /**
     * Get the user is activated or not.
     *
     * @return string
     */

    public function active()
    {
        return !is_null($this->activated_at);
    }

    public function reachedInviteCodeRequestLimit()
    {
        return $this->inviteCodes()->count() >= env('MAX_INVITE_CODE_LIMIT');
    }

    public function activate()
    {
        $this->update([
            'activated_at' => now()
        ]);
    }

    public function inviteCodes()
    {
        return $this->hasMany(InviteCode::class);
    }
}
