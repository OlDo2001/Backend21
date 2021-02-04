<?php
class App
{
    public static $endpoint = "http://localhost/Uppgift-03/WebshopApi/";

    public static function main()
    {

        try {
            $products = self::getData();
            // print_r($array);
            self::viewData($products);
        } 
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function getData()
    {

        $json = @file_get_contents(self::$endpoint);
        // @ = Error Control Operator

        if (!$json)
            throw new Exception("Cannot access " . self::$endpoint);

        // Returnera data som en PHP-Array
        return json_decode($json, true);
    }

    public static function viewData($products){

        $table = "<table class='table'>";
        $table .= "<tr><th>Produkt</th><th>Bild</th><th>Beskrivning</th><th>Pris</th><th>Antal i lager</th></tr>";
        foreach ($products as $key => $value) {
            $table .= "<tr>
                        <td>$value[produkt] </td>
                        <td><img src=$value[bild] style='width:250px;height:200px'></td>
                        <td>$value[beskrivning] </td>
                        <td>$value[pris] </td>
                        <td>$value[antal] </td>

                       </tr>";           
        }
        $table .= "</table>";
        echo $table;

    }
}

?>