<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Form</title>
</head>

<body>
    <form action="/edit/{{ $student[0]->id }}" method="post">
        @csrf
        <label for="studentName">Student Name:</label>
        <input type="text" id="studentName" name="student_name" value="<?php echo $student[0]->name; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
</body>

</html>
