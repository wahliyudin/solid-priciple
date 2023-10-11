<?php

namespace App\Solid\DependencyInvertion\Payment\Methods;

use App\Solid\DependencyInvertion\Payment\Methods\Contracts\MethodInterface;

class Paypal implements MethodInterface
{
    public function makePayment()
    {
    }
}
