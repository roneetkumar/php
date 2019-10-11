<?php
echo "Hello World<br>";

class Product
{

    private $id;
    private $description;
    private $price;
    private $quantity;
    private static $sequence = 300;

    public function __construct($description, $price, $quantity)
    {
        $this->id = self::$sequence++;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function get_description()
    {
        return $this->description;
    }

    public function set_description($description)
    {
        $this->description = $description;
    }

    public function get_price()
    {
        return $this->price;
    }

    // public function set_price($price)
    // {
    //     $this->price = $price;
    // }

    public function get_quantity()
    {
        return $this->quantity;
    }

    public function set_quantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function __toString()
    {
        return "<tr><td>$this->id</td><td>$this->description</td><td>$$this->price</td><td>$this->quantity</td></tr>";
    }

    public static function heading()
    {
        echo "<table border='1'>";
        echo "<tr><th>Product ID</th><th>Description</th><th>Price</th><th>Quantity</th></tr>";

    }

    public static function footer()
    {
        echo "</table>";
    }

    public function __call($method, $params)
    {
        switch ($method) {
            case 'set_price':
                if (count($params) == 1) {
                    $this->price = $this->price + $params[0];
                } elseif (count($params) == 2) {
                    $percentage = $params[1];
                    $this->price = $this->price + $this->price * $percentage;
                }
                break;
            default:
                break;
        }
    }
}

// class Person
// {
//     // instance attribute
//     public $name;
//     public $age;
//     public $height;

//     public function get_name()
//     {
//         return $this->name;
//     }

//     public function set_name($name)
//     {
//         $this->name = $name;
//     }

//     public function get_age()
//     {
//         return $this->age;
//     }

//     public function set_age($age)
//     {
//         $this->age = $age;
//     }

// }

// $person = new Person();

// $person->set_name("Roneet");
// $person->set_age(22);

// echo "<br>" . $person->get_name() . "<br>" . $person->get_age();
