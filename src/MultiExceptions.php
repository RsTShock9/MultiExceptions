<?php

namespace VitaliyKlubkou\MultiExceptions;

class MultiExceptions extends \Exception implements \Countable, \ArrayAccess
{
    use ArrayAccess;
    use Count;

    protected array $errors = [];

    public function addError(\Throwable $e)
    {
        $this->errors[] = $e;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}

