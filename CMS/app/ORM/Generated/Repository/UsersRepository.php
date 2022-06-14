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

    public static function getFetchColumn(string $column):object
    {
        $column_array = explode (",",$column);
        $all = Users::get();
        foreach ($all as $value){
            echo $value->{$column_array[0]};
            echo $value->{$column_array[1]};
        }
        exit;
        return $all;
    }
}
