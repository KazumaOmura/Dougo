<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
            
class Profile extends Model
{
    public $timestamps = false;
            
    protected $table = 'profile';
            
    protected $fillable = [
       'email','address',
    ];
            
    // アプリケーション側でcreateなどできない値を記述
    protected $guarded = [
        'id'
    ];
}
              