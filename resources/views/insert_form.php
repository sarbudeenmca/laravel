<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Form</title>
</head>

<body>
    <form action="/create" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <label for="studentName">Student Name:</label>
        <input type="text" id="studentName" name="student_name" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
