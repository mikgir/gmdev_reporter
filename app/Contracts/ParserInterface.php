<?php

namespace App\Contracts;

interface ParserInterface
{
    /**
     * @param string $url
     * @return ParserInterface
     */
    public function setUrl(string $url): self;

    /**
     * @return array
     */
    public function getNews(): array;
}
