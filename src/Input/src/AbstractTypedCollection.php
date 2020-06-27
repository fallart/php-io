<?php
/**
 * @copyright  Copyright (c) 2020 Jobplanner Ltd. (jobplanner.io)
 */
declare(strict_types=1);

namespace Input;

use Iterator;

abstract class AbstractTypedCollection implements Iterator
{
    private array $data = [];

    /**
     * PropertiesCollection constructor.
     *
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        foreach ($data as $key => $value) {
            if ($this->checkType($value)) {
                $this->add($key, $value);
            }
        }
    }

    abstract protected function checkType($value): bool;

    public function current()
    {
        if (!$this->valid()) {
            $this->rewind();
        }

        return $this->data[$this->key()];
    }

    public function next()
    {
        next($this->data);
    }

    public function key()
    {
        return key($this->data);
    }

    public function valid()
    {
        return isset($this->data[$this->key()]);
    }

    public function rewind()
    {
        reset($this->data);
    }

    public function add($key, $value): self
    {
        if ($this->checkType($value)) {
            $this->data[$key] = $value;
            $this->rewind();
        }

        return $this;
    }
}