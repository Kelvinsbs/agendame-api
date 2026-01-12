<?php

namespace App\Exceptions;

use App\Traits\RenderToJson;
use Exception;

class UserNotFoundException extends Exception
{
    use RenderToJson;

    protected $message = 'This user was not found!';
    protected $code = 400;
}
