<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class donation extends Model
{
    public function Get_Donor_History($userId) // FOR DONOR HISORY
    {
        return DB::select("
            SELECT amount, created_at, purpose, staff_id
            FROM donation
            WHERE donor_id = ?
            ORDER BY created_at DESC
        ", [$userId]);
}
}
