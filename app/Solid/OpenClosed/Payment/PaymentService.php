<?php

namespace App\Solid\OpenClosed\Payment;

use App\Solid\OpenClosed\Payment\Methods\Contracts\PaymentMethodInterface;

class PaymentService
{
    public function pay(PaymentMethodInterface $paymentMethodInterface)
    {
        return $paymentMethodInterface->makePayment();
    }
}
