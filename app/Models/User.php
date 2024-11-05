<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Uuid, HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $guarded = [];

    protected $fillable = [
        'register',
        'username',
        'name',
        'email',
        'password',
        'email_verified_at',
        'statuskerja',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        // 'password' => 'hashed',
    ];

    public function setPasswordAttribute($value)
    {
        // Hash the password with MD5 before saving it
        $this->attributes['password'] = md5($value);
    }

    /**
     * Check if the password is stored in MD5 format.
     *
     * @return bool
     */
    public function isPasswordMd5()
    {
        return preg_match('/^[a-f0-9]{32}$/', $this->password) === 1;
    }
}
