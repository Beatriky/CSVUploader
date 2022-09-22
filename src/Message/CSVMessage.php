<?php

namespace App\Message;
class CSVMessage
{
    private string $name;
    private  $age;
    private string $movie;
    private $year;

    /**
     * @param $name
     * @param $age
     * @param $movie
     * @param $year
     */
    public function __construct($name, $age, $movie, $year)
    {
        $this->name = $name;
        $this->age = $age;
        $this->movie = $movie;
        $this->year = $year;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }


    public function getName(): string
    {
        return $this->name;
    }

}
