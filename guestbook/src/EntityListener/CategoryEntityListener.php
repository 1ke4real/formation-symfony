<?php

namespace App\EntityListener;

use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;
use Doctrine\Persistence\Event\LifecycleEventArgs;

#[AsEntityListener(event: 'prePersist', entity: Category::class)]
#[AsEntityListener(event: 'preUpdate', entity: Category::class)]

class CategoryEntityListener
{
    public function __construct()
    {
    }

    public function __invoke(Category $category, LifecycleEventArgs $event): void
    {
        $category->setCreatedAtValue();
        $category->setUpdatedAtValue();
    }
}