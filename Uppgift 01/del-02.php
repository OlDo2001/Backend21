<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uppgift 1 del 2</title>
</head>
<body>
<form action="#" method="get">

<h4>Ange ditt förnamn?</h4>
<input type="text" name="firstname"> <br>
<h4>Ange ditt efternamn? </h4>
<input type="text" name="lastname"> <br><br>

<input type="submit" name="Skicka"> <br><br>

</form>

<?php
if(isset($_GET['Skicka'])){
   
    $fel = FALSE;
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];

    if ((strlen($firstname)==0)||(strlen($lastname)==0)){
        echo "OBS! Något saknas!<br>";
        $fel = TRUE;
    }

    $name = $firstname. "." . $lastname;

    $name = strtolower($name);
    $name = str_replace(' ','',$name);
    $name = str_replace('å','a',$name);
    $name = str_replace('ä','a',$name);
    $name = str_replace('ö','o',$name);
    $name = str_replace('Å','a',$name);
    $name = str_replace('Ä','a',$name);
    $name = str_replace('Ö','o',$name);

    
    for ($i = 0; $i < strlen($name); $i++){
        $char = $name[$i];
        if (is_numeric($char)) {
            echo "OBS! Inga siffror i namnet!<br>";
            $fel = TRUE;
            break;
        } 
    }  
    if (strlen($name)>21){
        echo "Namnet är för långt". "<br>";
        $fel = TRUE;
    }
    if (!$fel){
        echo  "<b>Ditt Email är: </b>" . $name . "@" . "yh.nackademin.se";
    } 
}
?>
</body>
</html>