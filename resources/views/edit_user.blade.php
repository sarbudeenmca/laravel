<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Form</title>
</head>

<body>
    <h2>Create User</h2>
    <form action="/update/{{ $user->id }}" method="post">
        <!-- CSRF Token -->
        @csrf

        <!-- Name -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" required>
        <br>

        <!-- Email -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required>
        <br>

        <!-- Mobile -->
        <label for="mobile">Mobile:</label>
        <input type="tel" id="mobile" name="mobile" value="{{ $user->mobile }}" required>
        <br>

        <!-- Age -->
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="{{ $user->age }}" required>
        <br>

        <!-- Submit Button -->
        <button type="submit">Update</button>
    </form>
</body>

</html>
