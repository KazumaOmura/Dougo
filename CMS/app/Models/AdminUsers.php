<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
            
class AdminUsers extends Model
{
    public $timestamps = false;
            
    protected $table = 'admin_users';
            
    protected $fillable = [
       'email','password','display_name','role','active','created_at','updated_at',
    ];
            
    // アプリケーション側でcreateなどできない値を記述
    protected $guarded = [
        'id'
    ];
}
              