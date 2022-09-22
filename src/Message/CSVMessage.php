<?php

namespace App\Message;
class CSVMessage
{
    private string $name;
    private int $age;
    private string $movie;
    private int $year;


    public function __construct($year,$age,$name,$movie)
    {
        $this->year = $year;
        $this->age = $age;
        $this->name = $name;
        $this->movie = $movie;

    }


    public function getAge(): int
    {
        return $this->age;
    }

    public function getMovie(): string
    {
        return $this->movie;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
