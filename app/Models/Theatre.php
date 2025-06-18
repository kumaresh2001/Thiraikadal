<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Theatre extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'Theatre';

    public $timestamps = false;

    protected $fillable = [
        'theatre_name',
        'user_id',
        'city_id',
        'description',
        'image'
    ];


    protected $hidden = [];

    protected $casts = [];

}
