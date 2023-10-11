<?php

namespace App\Solid\DependencyInvertion\Payment;

use App\Solid\DependencyInvertion\Payment\Methods\Contracts\MethodInterface;

class PaymentProcess
{
    public function __construct(
        protected MethodInterface $methodInterface
    ) {
    }

    public function pay()
    {
        return $this->methodInterface->makePayment();
    }
}
