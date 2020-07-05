<?php

namespace VitaliyKlubkou\MultiExceptions;

trait ArrayAccess
{
    protected array $errors = [];

    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->errors[$offset];
    }

    public function offsetSet($offset, $value)
    {
        return $this->errors[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->errors[$offset]);
    }
}
