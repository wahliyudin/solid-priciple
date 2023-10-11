<?php

namespace App\Solid\SingleResponsibility\Sale;

use App\Solid\SingleResponsibility\Sale\FormatExports\PdfExport;

class Example
{
    public function example(SaleReport $saleReport)
    {
        return $saleReport->between('21-10-2023', '20-11-2023')
            ->export(new PdfExport);
    }
}
