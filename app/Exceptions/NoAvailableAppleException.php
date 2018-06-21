<?php

namespace App\Exceptions;

use Exception;

class NoAvailableAppleException extends Exception
{
    protected $message = 'Apple basket is empty';
}