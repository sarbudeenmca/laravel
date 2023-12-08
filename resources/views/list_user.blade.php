<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <title>Minimal Table with CSS</title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Age</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td> {{ $user->email }} </td>
                    <td> {{ $user->mobile }} </td>
                    <td> {{ $user->age }} </td>
                    <td>
                        <a href="/edit_user/{{ $user->id }}">Edit</a>
                        <a href="/delete_user/{{ $user->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<br><br>
    <a href="{{ url('create_user') }}">New user</a>

</body>

</html>
