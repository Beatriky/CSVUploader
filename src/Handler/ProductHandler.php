<?php

namespace App\Handler;

use App\Entity\Product;
use App\Message\CSVMessage;
use App\Message\ProductMessage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class ProductHandler implements MessageHandlerInterface
{
    private EntityManagerInterface $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function __invoke(ProductMessage $message): void
    {
        $csv = (new Product())
            ->setName($message->getName())
            ->setBrochureFilename($message->getBrochureFilename());
        $this->em->persist($csv);
        $this->em->flush();
    }
}