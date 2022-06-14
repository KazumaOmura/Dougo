<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\ORM\Generated\Repository\UsersRepository;

class SampleController extends Controller
{
    public function json_data() {

        $string = '文字列';
        $number = 12345;
        $boolean = true;
        $array = ['太郎', '次郎', '三郎'];
        $object = [
            'key_1' => 'value_1',
            'key_2' => 'value_2',
            'key_3' => 'value_3',
        ];

        return [
            'string' => $string,
            'number' => $number,
            'boolean' => $boolean,
            'array' => $array,
            'object' => $object
        ];

    }

    public function index()
    {
//        ## RepositoryでDB操作
//        $repo = UsersRepository::getAll(1);
//        var_dump($repo);
//
//        ## create
//        Users::create([
//            'id' => '2',
//            'name' => 'sample_user',
//        ]);
//
//        ## read(よく使うものはRepositoryでメソッドにする)
//
//        ## update
//        Users::where('id', 2)->update([
//            'name' => 'hoge_user',
//        ]);
//
//        ## delete
//        Users::where('id', 2)->delete();


    }
}
