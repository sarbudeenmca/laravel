<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Form</title>
</head>

<body>
    <h2>Create User</h2>
    <form action="/store" method="post">
        <!-- CSRF Token -->
        @csrf

        <!-- Name -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <!-- Mobile -->
        <label for="mobile">Mobile:</label>
        <input type="tel" id="mobile" name="mobile" required>
        <br>

        <!-- Age -->
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br>

        <!-- Submit Button -->
        <button type="submit">Submit</button>
    </form>
    <br><br>
    <a href="{{ url('list_user') }}">Users List</a>
</body>

</html>
