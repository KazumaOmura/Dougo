<?php

namespace App\Http\Controllers;

class AdminUsersListController extends Controller
{
    public function index()
    {
        //  ページのタイトルを定義する
        $title = 'admin_users一覧';
        //  表のカラム名を文字列で定義する
        $column = 'id,email,password';
        //  Repositoryの名前をここで宣言する
        $repository_name = 'AdminUsers';

        return view('admin_users.admin_users_list', compact(
            'title',
            'column',
            'repository_name'
        ));
    }
}
