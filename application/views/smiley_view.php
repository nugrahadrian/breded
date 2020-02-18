<!DOCTYPE html>
<html lang="en">
        <head>
        <style>
            footer {
                background-color: lightgrey;
                padding: 30px;
                text-align: center;
                font-size: 35px;
                color: black;
            }
        </style>
            <title>Smiley</title>
            <?php echo smiley_js();?>
        </head>
        <body>
       <center>
       <marquee> <?= $komentar ?> </marquee>
         
        <p>Pencet Emoji nyah</p>
        <?php echo $smiley_table; ?>
        </center>
        </body>
        </br>
        <footer>Sampai Jago</footer>
</html>