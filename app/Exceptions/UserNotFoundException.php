<?php

namespace App\Exceptions;

use Exception;

class UserNotFoundException extends Exception
{
    /**
     * UserNotFoundException constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->message = sprintf('User with id \'%s\' not found', $id);
    }
}