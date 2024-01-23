<?php
class Products
{

    private $db;
    public $title;
    public $price;
    public $image;
    public $description;
    public $category;

    public function __construct()
    {
        $this->db = new DatabaseConnection();
    }

    public function fetchAll()
    {
        return $this->db->fetchAll();
    }

}
