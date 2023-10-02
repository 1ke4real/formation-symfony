<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    public array $products = [
        [
            'id' => 1,
            'name' => 'Iphone 13',
            'price' => 999.99,
            'description' => 'Apple iPhone 13 Pro 256 Go Bleu Pacifique',
            'category' => 'smartphone',
        ],
        [
            'id' => 2,
            'name' => 'Samsung Galaxy S21',
            'price' => 899.99,
            'description' => 'Samsung Galaxy S21 5G 128 Go Double SIM Noir Phantom',
            'category' => 'smartphone',
        ],
        [
            'id' => 3,
            'name' => 'Huawei P40',
            'price' => 799.99,
            'description' => 'Huawei P40 Pro 5G 256 Go Double SIM Noir',
            'category' => 'smartphone',
        ],
        [
            'id' => 4,
            'name' => 'MacBook Pro',
            'price' => 1299.99,
            'description' => 'Apple MacBook Pro 13" 256 Go SSD 8 Go RAM Intel Core i5 quadricœur à 1,4 GHz Argent',
            'category' => 'laptop',
        ]
    ];


    #[Route('/product/{id}', name: 'app_product')]
    public function show(int $id): JsonResponse
    {
        if ($id){
            $product = array_filter($this->products, function ($product) use ($id) {
                return $product['id'] === $id;
            });
        } else {
            $product = 'Product not found';
        }
        dump($product);
        return new JsonResponse(current($product));
    }
    #[Route('/products', name: 'app_product_all')]
    public function all(): JsonResponse
    {
       $products = $this->products;
        return new JsonResponse($products);
    }

}
