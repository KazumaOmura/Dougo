<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" media="all" href="{{ asset('css/bootstrap.css') }}">

    <title>Document</title>
</head>

<body>
@include('layouts.header')
{{ Breadcrumbs::render('admin.user.index') }}
<main class="container-xxl">

{{ $hoge }}
    <table class="table">
        <thead>
        <tr>
            @foreach($column as $value)
                <th scope="col">{{ $value }}</th>
            @endforeach
            <th scope="col">操作</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($array as $value)
                <td>{{ $value[0] }}</td>
                <td>{{ $value[1] }}</td>
            @endforeach
            <td><button type="button" class="btn btn-primary">Primary</button></td>
        </tr>
        </tbody>
    </table>

</main>
</body>
<script src="{{ asset('js/bootstrap.js') }}"></script>
</html>
