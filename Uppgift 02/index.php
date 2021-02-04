<?php include ('App.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClothProducts</title>
</head>
<style>
h1 {color: white; background-color:#725d5c; text-align: center;}
h2 {font-style: italic;} 
table, th, td {border: 2px solid black; padding: 15px; border-collapse: collapse;}
img {width: 50%; display: block; margin-left: auto;
     margin-right: auto; margin-top:auto; margin-bottom:auto; 
     padding: 20px 0;}
th {text-align: center; color: black; background-color:#f8ce58; font-size: 20px;}
body { padding: 20px;}
</style>
<body>

    <h1>New arrivals</h1>

    <?php App::main(); ?>

</body>
</html>