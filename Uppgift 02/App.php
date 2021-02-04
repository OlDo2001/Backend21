<?php
class App
{
    public static $endpoint = "https://fakestoreapi.com/products";

    public static function main()
    {

        try {
            $array = self::getData();
            // print_r($array);
            self::viewData($array);
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

    public static function viewData($array){

        $table = "<table class='table'>";
        $table .= "<tr><th>Titel</th><th>Image</th><th>Description</th><th>Price</th></tr>";
        echo "<h2>Women clothing</h2>";
        foreach ($array as $key => $value) {
            if("$value[category]" == 'women clothing'){
            $table .= "<tr>
                        <td>$value[title] </td>
                        <td><img src=$value[image] style='width:200px;height:250px';> </td>
                        <td>$value[description] </td>
                        <td>$value[price] </td>
                       </tr>";
            }           
        }
        $table .= "</table>";
        echo $table;

        $table = "<table class='table'>";
        $table .= "<tr><th>Titel</th><th>Image</th><th>Description</th><th>Price</th></tr>";
        echo "<h2>Men clothing</h2>";
        foreach ($array as $key => $value) {
            if("$value[category]" == 'men clothing'){
            $table .= "<tr>
                        <td>$value[title] </td>
                        <td><img src=$value[image] style='width:200px;height:250px';> </td>
                        <td>$value[description] </td>
                        <td>$value[price] </td>
                       </tr>";
            }           
        }
        $table .= "</table>";
        echo $table;

        $table = "<table class='table'>";
        $table .= "<tr><th>Titel</th><th>Image</th><th>Description</th><th>Price</th></tr>";
        echo "<h2>Jewelery</h2>";
        foreach ($array as $key => $value) {
            if("$value[category]" == 'jewelery'){
            $table .= "<tr>
                        <td>$value[title] </td>
                        <td><img src=$value[image] style='width:200px;height:250px';> </td>
                        <td>$value[description] </td>
                        <td>$value[price] </td>
                      </tr>";
            }           
        }
        $table .= "</table>";
        echo $table;
    }
}

?>