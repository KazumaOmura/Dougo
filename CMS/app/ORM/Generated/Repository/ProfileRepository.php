<?php

namespace App\ORM\Generated\Repository;
        
use App\Models\Profile;
        
class ProfileRepository
{
    public static function getAll(int $id):object
    {
        $all = Profile::where('id', $id)->get();
        return $all;
    }
}        