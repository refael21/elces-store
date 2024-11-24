<?php
class ProductController {
    private $productModel;

    public function __construct($productModel) {
        $this->productModel = $productModel;
    }

    public function index() {
        $products = $this->productModel->getAllProducts();
        require_once __DIR__ . '/../views/products/index.php'; // Path absolut
    }

    public function view($id) {
        $product = $this->productModel->getProductById($id);
        require_once __DIR__ . '/../views/products/view.php'; // Path absolut
    }
}
