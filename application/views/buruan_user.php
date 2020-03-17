<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buruan User</title>
</head>
<body>
    <p>Hai, <?php echo $this->session->userdata('username'); ?></p>
    
    <a href="<?php echo site_url('login/logout'); ?>"> Logout </a>
</body>
</html>