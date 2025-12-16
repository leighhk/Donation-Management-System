<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class donation_records extends Model
{

public function Get_Donation_Records()
{
    return DB::table('donation as d')
        ->join('users as u', 'u.user_id', '=', 'd.donor_id')
        ->join('category as c', 'c.category_id', '=', 'd.category_id')
        ->select(
            'd.*',
            'u.username',
            'c.name as category_name' // use alias to keep your blade simple
        )
        ->get();
}


    
 public function Set_New_Donation_Record($data, $finance_staff_id)
{
    $donationId = DB::table('donation')->insertGetId([
        'donor_id'    => $data['donor_id'],
        'category_id' => $data['category_id'],
        'amount'      => $data['amount'],
        'purpose'     => $data['purpose'],
        'staff_id'    => $finance_staff_id,
        'created_at'  => now(),
    ]);

    return $donationId;
}


public function Get_Specific_Donation_Record($donationId)
{
    return DB::table('donation as d')
        ->join('users as u', 'u.user_id', '=', 'd.donor_id')
        ->select('d.*', 'u.username')
        ->where('d.donation_id', $donationId)
        ->first(); // returns a single record
}
public function Update_Donation_Record($donationId, $data)
{
    return DB::table('donation')
        ->where('donation_id', $donationId)
        ->update([
            'amount'      => $data['amount'],
            'purpose'     => $data['purpose'],
            'updated_at'  => now()
        ]);
}

public function Delete_Donation_Record($donationId){
    return DB::delete('DELETE FROM donation WHERE donation_Id =? ', [$donationId]);
}

public function Get_Yearly_Summary($year)
{
    return DB::table('donation as d')
        ->select(
            DB::raw('MONTH(d.created_at) as month'),
            DB::raw('COUNT(*) as total_donations'),
            DB::raw('SUM(d.amount) as total_amount')
        )
        ->whereYear('d.created_at', $year)
        ->groupBy(DB::raw('MONTH(d.created_at)'))
        ->get();
}
}

