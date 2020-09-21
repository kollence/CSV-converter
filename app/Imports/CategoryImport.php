<?php

namespace App\Imports;

use App\Category;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class CategoryImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        
        $category = Category::firstOrCreate(
            [
                'category_name' => $row['category_name']
            ]

        );

        if (! $category->wasRecentlyCreated) {
            $category->update([
                'category_name' => $row['category_name']
            ]);
        }

        
    }
}
