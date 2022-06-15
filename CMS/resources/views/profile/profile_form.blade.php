<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" media="all" href="{{ asset('css/bootstrap.css') }}">

    <title>{{ $title }}</title>
</head>

<body>
@include('layouts.header')
{{ Breadcrumbs::render('profile.form') }}
<main class="container-xxl">
    <x-tab_form column="{{ $column }}" reponame="{{ $repository_name }}" userid="{{ $id }}"/>
</main>

</body>
<script src="{{ asset('js/bootstrap.js') }}"></script>
</html>