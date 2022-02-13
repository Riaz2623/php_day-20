<?php


namespace App\classes;


class Product
{
    protected $file;
    protected $directory;

    protected $product;
    protected $products;
    protected $nmae;
    protected $price;
    protected $discription;
    protected $imageName;
    protected $tempPath;


    public function __construct($post=null, $file =null)
    {
        $this->file     =$file;
       $this->imageName = $file['image']['name'];
       $this->tempPath = $file['image']['tmp_name'];
       $this->directory = 'assets/img/product-image/'.$this->imageName;

    }


    public function index()
    {
        header('Location: action.php?pages=add-product ');
    }
    public function newProduct()
    {

        move_uploaded_file($this->tempPath, $this->directory);

    }

}