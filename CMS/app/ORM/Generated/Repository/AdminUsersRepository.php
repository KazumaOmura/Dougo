<?php

namespace App\ORM\Generated\Repository;
        
use App\Models\AdminUsers;
        
class AdminUsersRepository
{
    public static function getAll(int $id):object
    {
        $all = AdminUsers::where('id', $id)->get();
        return $all;
    }
}        