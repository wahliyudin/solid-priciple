<?php

namespace App\Solid\LiskovSubstitution\Email\Services\Contracts;

interface EmailServiceInterface
{
    public function sendMessage(string $to, string $subject, string $message): void;
}
