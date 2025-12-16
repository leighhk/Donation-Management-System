<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class category extends Model
{
    public function Get_All_Category(){
        return DB::select('SELECT * FROM category');
    }

    public function Get_Category_By_Id($category_id)
{
    $rows = DB::select("
        SELECT *
        FROM category
        WHERE category_id = ?
        LIMIT 1
    ", [$category_id]);

    return count($rows) ? $rows[0] : null;
}
public function Update_Category($categoryId, $data)
    {
        return DB::table('category')
            ->where('category_id', $categoryId)
            ->update([
                'name' => $data['name'],
                'description' => $data['description'],
            ]);
    }
}
