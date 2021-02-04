<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
    <a href="?firstname=Olga&lastname=Domorod">
    exempel-02.php?firstname=Olga&lastname=Domorod
    </a>
    </p>
 <?php
 if(isset($_GET['firstname'])&($_GET['lastname'])){
    echo "<h1>Hello " . $_GET['firstname'] .$_GET['lastname']. "</h1>";
}
else{
    echo "<h1>Hello</h1>";
}  
?>
</body>
</html>