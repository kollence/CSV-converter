<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class ProductImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'model_number' => $row['model_number'],
            'category_name' => $row['category_name'],
            'deparment_name' => $row['deparment_name'],
            'manufacturer_name' => $row['manufacturer_name'],
            'upc' => $row['upc'],
            'sku' => $row['sku'],
            'regular_price' => $row['regular_price'],
            'sale_price' => $row['sale_price'],
            'description' => $row['description'],
            'url' => $row['url']
        ]);
    }
}
