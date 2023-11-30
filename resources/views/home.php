<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Demo</title>
</head>

<body>
    <h1>
        <?php
        echo $title1;
        echo ($id) ? " - " . $id : "";
        echo ($title2) ? " - " . $title2 : "";
        ?>
    </h1>
    <?= session('message') ?>
    <form action="<?= url('get_userdata') ?>" method="post">
        <label>Name:</label>
        <input type="text" name="name" placeholder="Enter username"><br><br>
        <label>Email Address:</label>
        <input type="email" name="email" placeholder="Enter Email"><br><br>
        <label>Mobile Number:</label>
        <input type="text" name="mobile" placeholder="Enter Mobile"><br><br>
        <input type="hidden" name="_token" value="<?= csrf_token() ?>">
        <button type="submit" name="send">Send</button>
    </form>
</body>

</html>
