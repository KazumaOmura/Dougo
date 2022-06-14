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
                <td><button type="button" class="btn btn-primary">Primary</button></td>
            </tr>
        @endforeach
</table>
