<?php

/**
 * En klass som beskriver en produkt
 */
class Product
{
    /**
     * Instansvariabler
     */
    private $name;
    private $description;
    private $price;
    private $img;
    private $quantity;
    /**
     * Konstruktor
     */
    public function __construct($name, $img, $description, $price)
    {
        $this->name = $name;
        $this->img = $img;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = rand(0, 50);
    }
    /**
     * En metdod som konverterar ett objekt till en array
     */
    public function toArray()
    {
        $array = array(
            "produkt"  => $this->name,
            "bild"   => $this->img,
            "beskrivning"  => $this->description,
            "pris"  => $this->price,
            "antal" => $this->quantity

        );

        // print_r($array);
        
        return $array;
    }
}