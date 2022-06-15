<h2>{{ $title }}</h2>
<table class="table">
    <tr>
        @foreach ($columns as $column)
            <th scope="col">{{ $column }}</th>
        @endforeach
        <th scope="col">操作</th>
    </tr>
        @foreach ($values as $value)
            <tr>
            @foreach ($columns as $column)
                <td>{{ $value->{$column} }}</td>
            @endforeach
                <td><a href="/user/{{ $value->id }}" class="btn btn-primary">編集</a></td>
            </tr>
        @endforeach
</table>
