<?php

namespace App\ORM\Generated\Repository;

use App\Models\Users;

class UsersRepository
{
    public static function getAll():object
    {
        $all = Users::get();
        return $all;
    }

    public static function getValueByID(int $user_id):object
    {
        $value = Users::where('id', $user_id)->first();
        return $value;
    }
}
