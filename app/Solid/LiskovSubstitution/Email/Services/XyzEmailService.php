<?php

namespace App\Solid\LiskovSubstitution\Email\Services;

use App\Solid\LiskovSubstitution\Email\Services\Contracts\EmailServiceInterface;

class XyzEmailService implements EmailServiceInterface
{
    public function sendMessage(string $to, string $subject, string $message): void
    {
    }
}
