<?php

namespace App\Solid\OpenClosed\AreaCalculator;

use App\Solid\OpenClosed\AreaCalculator\Shapes\Contracts\ShapeInterface;

class AreaCalculator
{
    public function totalArea(ShapeInterface ...$shapes)
    {
        $area = 0;
        foreach ($shapes as $shape) {
            $area += $shape->area();
        }
        return $area;
    }
}
