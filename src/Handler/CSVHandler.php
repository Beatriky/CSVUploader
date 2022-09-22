<?php

namespace App\Handler;

use App\Entity\Oscar;
use App\Message\CSVMessage;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class CSVHandler implements MessageHandlerInterface
{
    private EntityManagerInterface $em;


    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function __invoke(CSVMessage $message): void
    {
        $csv = (new Oscar())
            ->setYear($message->getYear())
            ->setAge($message->getAge())
            ->setName($message->getName())
            ->setMovie($message->getMovie());
        $this->em->persist($csv);
        $this->em->flush();
    }
}