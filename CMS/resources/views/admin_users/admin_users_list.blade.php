<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" media="all" href="{{ asset('css/bootstrap.css') }}">

    <title>{{ $title }}</title>
</head>

<body>
@include('layouts.header')
{{ Breadcrumbs::render('admin_users.list') }}
<main class="container-xxl">
    <x-table column="{{ $column }}" reponame="{{ $repository_name }}" title="{{ $title }}"/>
</main>

</body>
<script src="{{ asset('js/bootstrap.js') }}"></script>
</html>