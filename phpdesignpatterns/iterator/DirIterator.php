<?php

namespace patterns\iterator;

use Iterator;
use Traversable;

class DirIterator implements Iterator {

    /**
     * @var Directory $dir
     */
    private $dir;

    private $currentElement;

    private $path;

    private $valid = true;

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
        if($element == false){
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