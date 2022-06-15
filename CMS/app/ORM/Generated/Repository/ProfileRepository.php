<?php

namespace App\ORM\Generated\Repository;

use App\Models\Profile;

class ProfileRepository
{
    public static function getAll():object
    {
        $all = Profile::get();
        return $all;
    }

    public static function getValueByID(int $id):object
    {
        $value = Profile::where('id', $id)->first();
        return $value;
    }
}