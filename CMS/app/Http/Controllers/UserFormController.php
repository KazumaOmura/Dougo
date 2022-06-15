<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\ORM\Generated\Repository\UsersRepository;

class UserFormController extends Controller
{
    public function index(int $user_id)
    {
        //  ページのタイトルを定義する
        $title = 'ユーザ編集';
        //  表のカラム名を文字列で定義する
        $column = 'id,name,email';
        //  Repositoryの名前をここで宣言する
        $repository_name = 'Users';

        return view('user.user_form', compact(
            'title',
            'column',
            'repository_name',
            'user_id',
        ));
    }
}
