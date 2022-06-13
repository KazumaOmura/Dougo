<?php

// ホーム
Breadcrumbs::for('home', function ($trail) {
    $trail->push('ホーム', url('/'));
});

Breadcrumbs::for('admin.home', function ($trail) {
    $trail->push('ホーム', url('/'));
});

Breadcrumbs::for('admin.user.index', function ($trail) {
    $trail->parent('admin.home');
    $trail->push('管理ユーザー', url('/'));
});