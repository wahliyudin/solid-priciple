<?php

namespace App\Solid\OpenClosed\AreaCalculator\Shapes;

use App\Solid\OpenClosed\AreaCalculator\Shapes\Contracts\ShapeInterface;

class Rectangle implements ShapeInterface
{
    public function __construct(
        protected $width,
        protected $height,
    ) {
    }

    public function area()
    {
        return $this->height * $this->width;
    }
}
