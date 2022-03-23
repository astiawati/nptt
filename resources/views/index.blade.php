<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
    </style>
</head>
<body>
    <br>
    <div>
        <button><a href="{{ route('add') }}">Add company</a></button>
    </div>
    <br>
    <div>
        <table>
            <tr>
                <th>No.</th>
                <th>Company</th>
                <th>Address</th>
                <th>Website</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @foreach ($company as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->website }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ route('edit', $item->id) }}">edit</a>
                    <a href="{{ route('delete', $item->id) }}">delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>