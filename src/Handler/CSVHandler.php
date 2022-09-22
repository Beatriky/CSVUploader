<?php

namespace App\Handler;

use App\Controller\ProductController;
use App\Entity\Oscar;
use App\Message\CSVMessage;
use Doctrine\ORM\EntityManagerInterface;

class CSVHandler
{
    private EntityManagerInterface $em;

    /**
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function __invoke(CSVMessage $message)
    {
        $csv = (new Oscar())
            ->setName($message->getName())
            ->setMovie($message->getMovie())
            ->setYear($message->getYear())
            ->setAge($message->getAge());

        $this->em->persist($csv);
        $this->em->flush();
    }
}