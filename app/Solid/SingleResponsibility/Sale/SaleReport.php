<?php

namespace App\Solid\SingleResponsibility\Sale;

use App\Solid\SingleResponsibility\Sale\FormatExports\Contracts\FormatExportInterface;
use Illuminate\Support\Facades\DB;

class SaleReport
{
    protected $sales;

    public function between($startDate, $endDate)
    {
        $this->sales = DB::table('sales')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->latest()
            ->get();
        return $this;
    }

    public function export(FormatExportInterface $formatExportInterface)
    {
        return $formatExportInterface->export($this->sales);
    }
}
