<?php

namespace App\ORM\Generated\Repository;
        
use App\Models\Users;
        
class UsersRepository
{
    public static function getAll(int $id):object
    {
        $all = Users::where('id', $id)->get();
        return $all;
    }
}        