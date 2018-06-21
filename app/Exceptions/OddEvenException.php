<?php

namespace App\Exceptions;

use Exception;

class OddEvenException extends Exception
{
    protected $message = 'You cant have apples with both odd and even ids, try again';
}