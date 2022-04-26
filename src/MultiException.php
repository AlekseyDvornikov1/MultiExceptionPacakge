<?php

namespace App;

use ArrayIterator;
use IteratorAggregate;

class MultiException extends \Exception implements IteratorAggregate, \ArrayAccess, \Countable
{
    use ArrayAccessTrait;

    protected array $data = [];

    /**
     * @return ArrayIterator
     */
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->data);
    }

    public function add($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function count(): int
    {
        return count($this->data);
    }
}