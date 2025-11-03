<?php

namespace App\Exceptions;

use App\Traits\RenderToJson;
use Exception;

class UserAlreadyVerifiedException extends Exception
{
    use RenderToJson;

    protected $message = 'User already has been verified.';
    protected $code = 400;
}
