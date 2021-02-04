<?php include ('App.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebShop</title>
</head>
<style>
h1 {color: white; background-color:#725d5c; text-align: center;}
table {width:100%;}
table, th, td {border: 2px solid black; padding: 15px; border-collapse: collapse; text-align: center;}
img {width: 20%; margin-left: 10px;
     margin-right: 10px; margin-top:auto; margin-bottom:auto;}
th { color: black; background-color:#f8ce58; font-size: 20px;}
body { padding: 20px;}
</style>
<body>

    <h1>BÄSTSÄLJARE</h1>

    <?php App::main(); ?>

</body>
</html>