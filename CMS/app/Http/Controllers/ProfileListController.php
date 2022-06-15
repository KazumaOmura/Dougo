<?php

namespace App\Http\Controllers;

class ProfileListController extends Controller
{
    public function index()
    {
        //  ページのタイトルを定義する
        $title = 'profile一覧';
        //  表のカラム名を文字列で定義する
        $column = 'id,name';
        //  Repositoryの名前をここで宣言する
        $repository_name = 'Profile';

        return view('profile.profile_list', compact(
            'title',
            'column',
            'repository_name'
        ));
    }
}
