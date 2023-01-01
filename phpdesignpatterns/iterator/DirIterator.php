<?php

namespace patterns\iterator;

use Directory;
use Iterator;

class DirIterator implements Iterator {

    /**
     * @var Directory $dir
     */
    private $dir;

    private string $currentElement;

    private string $path;

    private bool $valid = true;

    public function __construct(string $path)
    {
        $this->dir = dir($path);
        $this->path = $path;
    }

    public function key(): string
    {
        return $this->currentElement;
    }

    public function next(): void
    {
        $element = $this->dir->read();
        if(!$element){
            $this->valid = $element;
        } else {
            $this->currentElement = $element;
        }
    }

    public function valid(): bool
    {
        return $this->valid;
    }

    public function rewind(): void
    {
        $this->dir = dir($this->path);
        $this->currentElement = $this->dir->read();
    }

    public function current(): string
    {
       return $this->currentElement; 
    }

}