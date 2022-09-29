<?php

namespace App\Message;

class ProductMessage
{
    private string $name;
    private string $brochure_filename;

    /**
     * @param string $name
     * @param string $brochure_filename
     */
    public function __construct(string $brochure_filename,string $name )
    {
        $this->brochure_filename = $brochure_filename;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBrochureFilename(): string
    {
        return $this->brochure_filename;
    }

}