<?php

namespace App\Solid\DependencyInvertion\Payment\Methods;

use App\Solid\DependencyInvertion\Payment\Methods\Contracts\MethodInterface;

class Stripe implements MethodInterface
{
    public function makePayment()
    {
    }
}
