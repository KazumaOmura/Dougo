<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $timestamps = false;

    protected $table = 'users';

    protected $fillable = [
       'name',
    ];

    // アプリケーション側でcreateなどできない値を記述
    protected $guarded = [
        'id'
    ];
}
