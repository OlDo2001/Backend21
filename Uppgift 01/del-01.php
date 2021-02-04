<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uppgift 1 del 1</title>
</head>
<body>
    <?php
    date_default_timezone_set("Europe/Stockholm");
    $_monthsList = array(
        "1"=>"januari","2"=>"februari","3"=>"mars",
        "4"=>"april","5"=>"maj", "6"=>"juni",
        "7"=>"juli","8"=>"augusti","9"=>"september",
        "10"=>"oktober","11"=>"november","12"=>"december");
         
    $month = $_monthsList[date("n")];
         
    $_dayList = array(
        "1"=>"Måndag","2"=>"Tisdag","3"=>"Onsdag",
        "4"=>"Torsdag","5"=>"Fredag", "6"=>"Lördag",
        "0"=>"Söndag");
         
    $day = $_dayList[date("w")];

    echo "Vecka " . date(" W "). " - " .$day. " den " .date(" j "). $month. " kl.". date(" H:i ");
    
    ?>
</body>
</html>