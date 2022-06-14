<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\ORM\Generated\Repository\UsersRepository;

class SampleController extends Controller
{
    public function index()
    {
        ## RepositoryでDB操作
        $repo = UsersRepository::getAll(1);
        var_dump($repo);

        ## create
        Users::create([
            'id' => '2',
            'name' => 'sample_user',
        ]);

        ## read(よく使うものはRepositoryでメソッドにする)
        
        ## update
        Users::where('id', 2)->update([
            'name' => 'hoge_user',
        ]);

        ## delete
        Users::where('id', 2)->delete();
    }
}
