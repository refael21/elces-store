<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config/db.php';
require_once 'app/models/Product.php';
require_once 'app/controllers/ProductController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$productModel = new Product($pdo);
$productController = new ProductController($productModel);

if ($action == 'view' && isset($_GET['id'])) {
    $productController->view($_GET['id']);
} else {
    $productController->index();
}
