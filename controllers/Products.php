<?php
class Products {
    public $db;
    public $productPages = [
        '/produktet-moisturizers' => 'Moisturizers',
        '/produktet-toners' => 'Toners',
    ];
    public $pageTitle;
    public function __construct() {
        $this->db = connectDb();
        $this->setTitle();
    }

    public function setTitle() {
        $path = parse_url($_SERVER["REQUEST_URI"])['path'];
        if(array_key_exists($path, $this->productPages)) {
            $this->pageTitle = $this->productPages[$path];
        }
    }
    public function getProductsByCategory($category) {
        return $this->db->query("SELECT * FROM products WHERE category = '{$category}' ");
    }
}

