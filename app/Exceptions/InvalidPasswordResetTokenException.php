<?php

namespace App\Exceptions;

use App\Traits\RenderToJson;
use Exception;

class InvalidPasswordResetTokenException extends Exception
{
    use RenderToJson;

    protected $message = 'Invalid Password Reset Token.';
    protected $code = 400;
}
