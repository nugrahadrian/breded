<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php echo form_open('login/login'); ?>
    <form action="" method = "POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name ="submit" value="Login">
    </form>
</body>
</html>