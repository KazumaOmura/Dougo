<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\ORM\Generated\Repository\UsersRepository;

class SampleController extends Controller
{
    public function index()
    {
        //  ページのタイトルを定義する
        $title = 'ユーザ一覧';
        //  表のカラム名を文字列で定義する
        $column = 'id,name';
        //  Repositoryの名前をここで宣言する
        $reponame = 'Users';

        return view('sample', compact(
            'title',
            'column',
            'reponame'
        ));
    }
}
