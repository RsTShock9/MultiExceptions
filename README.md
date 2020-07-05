Implementation of the MultiExceptions pattern


Installation:
------------
```bash
  "require": {
    "vitaliyklubkou/multiexceptions" : "dev-master"
  }
```

Example:
------------
```php
<?php

use VitaliyKlubkou\MultiExceptions\MultiExceptions;

Class Model{

    public function fill($data)
    {
        $errors = new MultiExceptions;
        foreach ($data as $key => $value) {
            try {
                $this->$key = $value;
            } catch (ValidationErrors $e) {
                $errors->addError($e);
            }
        }
        if (count($errors) > 0) {
            throw $errors;
        }
    }
}

?>
```