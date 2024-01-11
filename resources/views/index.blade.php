<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>SCORE</th>
            <th>Actions</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td><a href=" {{ route('show', $student->id) }}">{{ $student->name}}</a></td>
                <td>{{ $student->score }}</td>
                <td>
                    <form action="{{ route('edit', $student) }}" method="get">
                        <button type="submit">Edit</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
        Current page: {{ $students->currentPage() }} <br>
        Total data: {{ $students->total() }} <br>
        Data per page: {{ $students->perPage() }} <br>

        {{ $students->links('pagination::bootstrap-4')}}
</body>
</html>