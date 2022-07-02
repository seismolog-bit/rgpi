<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nik',
        'tempat_lahir',
        'tgl_lahir',
        'jk',
        'agama',
        'pendidikan',
        'alamat',
        'pengurus_tingkat',
        'provinsi',
        'kabko',
        'kecamatan',
        'kelurahan',
        'jabatan',
        'no_hp',
        'ktp',
        'photo',
        'status',
        'is_active',
        'is_return'
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
    ];

    public function nia() 
    {
        return $this->hasOne('App\Models\Nia');
    }

    public function jabatans()
      {
          return $this->belongsTo('App\Models\Jabatan');
      }
}
