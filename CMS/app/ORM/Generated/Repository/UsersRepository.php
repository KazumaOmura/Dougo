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

    public static function getColumnName():object
    {
        $all = Users::get();
        return $all;
    }
}
