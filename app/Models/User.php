<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Store;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // 保存を許可するカラムを指定
    protected $fillable = [
        'user_id',
        'last_name',
        'first_name',
        'store_id',
        'is_admin',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];

    // 店舗とのリレーション（所属店舗）
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
