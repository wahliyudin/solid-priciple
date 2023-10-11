<?php

namespace App\Solid\LiskovSubstitution\Email;

use App\Solid\LiskovSubstitution\Email\Services\Contracts\EmailServiceInterface;

class EmailService
{
    public function sendMessage(EmailServiceInterface $emailServiceInterface)
    {
        return $emailServiceInterface->sendMessage('to@gmail.com', 'subject', 'message');
    }
}
