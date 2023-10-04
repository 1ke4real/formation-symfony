<?php

namespace App\EntityListener;


use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;
use Doctrine\Persistence\Event\LifecycleEventArgs;


#[AsEntityListener(event: 'prePersist', entity: Product::class)]
#[AsEntityListener(event: 'preUpdate', entity: Product::class)]

class ProductEntityListener
{
    public function __construct()
    {
    }

    public function __invoke(Product $product, LifecycleEventArgs $event): void
    {
        $product->setCreatedAtValue();
        $product->setUpdatedAtValue();
    }
}