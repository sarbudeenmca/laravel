<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Table Example</title>
</head>

<body>

    <h1>Students List</h1>

    <table id="yourTableID" border="1" cellspacing="0" cellpadding="10px" width="25%">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td><a href="edit/{{ $student->id }}">Edit</a> <a href="delete/{{ $student->id }}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/insert_form">Add Record</a>
    <a href="/deleteall">Delete All</a>

</body>

</html>
