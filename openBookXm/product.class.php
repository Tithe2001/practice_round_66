<?php

class Product
{
    public $id;
    public $name;
    public $price;
    public $offer_price;




    public function __construct($_id, $_name, $_price, $_offer_price)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->price = $_price;
        $this->offer_price = $_offer_price;
    }



    public function save()
    {

        $data = "$this->id,$this->name,$this->price,$this->offer_price";
        if (filesize("productdata.txt") > 0) {
            $data = PHP_EOL . $data;
        }

        file_put_contents("productdata.txt", $data, FILE_APPEND);
        return "Data Saved Successfully";
    }



    public static function showProduct()
    {
        $data = file("productdata.txt", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);

        $html = "<table>";

        $html .= " <tr> <th>ID</th> <th>Name</th> <th>Price</th> <th>Offer Price</th> <th>Action</th>  </tr>";

        foreach ($data as $key => $row) {
            list($id, $name, $price, $offer_price) = explode(",", $row);
            $html .= "<tr> <td>{$id}</td> <td>{$name}</td> <td>{$price}</td> <td>{$offer_price}</td> <td> <button> <a href='index.php?editId={$id}'>Edit</a> </button> <button> <a href='index.php?DeleteId={$id}'>Delete</a> </button> </td>   </tr>  ";
        }

        $html .= "</table>";
        return $html;
    }


    public static function delete($_id)
    {
        $data = file("productdata.txt");
        $product = "";
        foreach ($data as $key => $value) {
            list($id) = explode(",", $value);

            if ($id != $_id) {
                $product .= $value;
            }
        }

        file_put_contents("productdata.txt", $product);
        return true;
    }

    public function update()
    {
        $data = file("productdata.txt");
        $product = "";
        foreach ($data as $key => $value) {
            list($id) = explode(",", $value);

            if ($this->id == $id) {
                $product .= "$this->id,$this->name,$this->price,$this->offer_price," .PHP_EOL;

            } else {
                $product .= $value;
            }
        }
        file_put_contents("productdata.txt", $product);
        return true;
    }


    public static function edit($_id)
    {
        $data = file("productdata.txt");
        foreach ($data as $key => $value) {
            list($id, $name, $price, $offer_price) = explode(",", $value);
            if ($id == $_id) {
                $product = ["id" => $id, "name" => $name, "price" => $price, "offer_price" => $offer_price];
                break;
            }
        }
        return $product;
    }


    public function __toString()
    {
        return " $this->id | $this->name | $this->price | $this->offer_price ";
    }
}




?>