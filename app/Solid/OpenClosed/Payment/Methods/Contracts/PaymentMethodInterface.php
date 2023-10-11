<?php

namespace App\Solid\OpenClosed\Payment\Methods\Contracts;

interface PaymentMethodInterface
{
    public function makePayment();
}
