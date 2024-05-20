<?php

namespace App\Exceptions;

use Exception;

class ProportionNotFoundException extends Exception
{
    public function __construct($message = "Proportion not found")
    {
        parent::__construct($message);
    }
}
