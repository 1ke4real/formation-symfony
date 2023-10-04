<?php

use App\Entity\Conference;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsEntityListener;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\String\Slugger\SluggerInterface;


#[AsEntityListener(event: 'prePersist', entity: Conference::class)]
#[AsEntityListener(event: 'preUpdate', entity: Conference::class)]

class ConferenceEntityListener {
    public function __construct(private SluggerInterface $slugger)
    {
    }
    public function __invoke(Conference $conference, LifecycleEventArgs $event): void
    {
        $conference->computeSlug($this->slugger);
    }
}