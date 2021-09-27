<?php

namespace App\Imports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
Use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class OrderDataImport implements ToModel, WithHeadingRow
{

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        return new Order([
            //
            'invoice_no' => $row['InvoiceNo'],
            'stock_code' => $row['StockCode'],
            'description' => $row['Description'],
            'quantity' => $row['Quantity'],
            'invoice_date' => $row['InvoiceDate'],
            'unit_price' => $row['UnitPrice'],
            'customer_id' => $row['CustomerID'],
            'country' => $row['Country'],
        ]);
    }

}
