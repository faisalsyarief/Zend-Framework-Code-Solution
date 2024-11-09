<?php

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ProductController extends AbstractActionController
{
    public function indexAction()
    {
        // Biasanya data ini diambil dari database
        $products = [
            ['id' => 1, 'name' => 'Product 1', 'price' => 100],
            ['id' => 2, 'name' => 'Product 2', 'price' => 150],
            ['id' => 3, 'name' => 'Product 3', 'price' => 200],
        ];

        return new ViewModel([
            'products' => $products,
        ]);
    }

    public function detailAction()
    {
        $productId = $this->params()->fromRoute('id', 0);

        // Ambil data produk berdasarkan ID (simulasi)
        $product = ['id' => $productId, 'name' => 'Product ' . $productId, 'price' => 100 + ($productId * 10)];

        return new ViewModel([
            'product' => $product,
        ]);
    }
}
