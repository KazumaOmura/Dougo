<?php

namespace App\Http\Controllers;

class UsersFormController extends Controller
{
    public function index(int $id)
    {
        //  ページのタイトルを定義する
        $title = 'ユーザ編集';
        //  表のカラム名を文字列で定義する
        $column = 'id,name,email';
        //  Repositoryの名前をここで宣言する
        $repository_name = 'Users';

        return view('users.users_form', compact(
            'title',
            'column',
            'repository_name',
            'id',
        ));
    }
}
