<?php

namespace App\ORM\Generated\Repository;

use App\Models\AdminUsers;

class AdminUsersRepository
{
    public static function getAll():object
    {
        $all = AdminUsers::get();
        return $all;
    }

    public static function getValueByID(int $user_id):object
    {
        $value = Users::where('id', $user_id)->first();
        return $value;
    }
}