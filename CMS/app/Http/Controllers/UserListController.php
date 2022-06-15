<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\ORM\Generated\Repository\UsersRepository;

class UserListController extends Controller
{
    public function index()
    {
        //  ページのタイトルを定義する
        $title = 'ユーザ一覧';
        //  表のカラム名を文字列で定義する
        $column = 'id,name,email';
        //  Repositoryの名前をここで宣言する
        $repository_name = 'Users';

        return view('user.user_list', compact(
            'title',
            'column',
            'repository_name'
        ));
    }
}
