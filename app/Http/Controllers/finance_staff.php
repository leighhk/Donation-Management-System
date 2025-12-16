<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\donation_records;
use App\Models\Users;
use Illuminate\Http\Request;

class finance_staff extends Controller
{
    public function dashboard()
    {
        return view('staff/dashboard');
    }

    public function donation_list()
    {
        $model = new donation_records();
        $data = $model->Get_Donation_Records();
        return view('donation/list', compact('data'));
    }

public function donation_add()
{
    $userModel = new Users();
    $donor = $userModel->Get_Donor();

    $categoryModel = new category();   // ← create Category model if not existing
    $category = $categoryModel->Get_All_Category();

    return view('donation/add', compact('donor', 'category'));
}



    public function donation_creation(Request $request)
    {
        $finance_staff_id = $request->session()->get('user_id');

        $validated = $request->validate([
            'donor_id'     => 'required|integer',
            'amount'       => 'required|numeric|min:0',
            'purpose'      => 'required|string',
            'category_id'  => 'required|integer'
        ]);
        
        $donationModel = new donation_records();
        $donationModel->Set_New_Donation_Record($validated, $finance_staff_id);

        return redirect('/staff/dashboard');
    }


    public function edit_record($donationId)
    {
        $model = new donation_records();
        $donationModel = $model->Get_Specific_Donation_Record($donationId);

        return view('donation/edit', compact('donationModel'));
    }


    public function update_record(Request $request, $donationId)
    {
        $validated = $request->validate([
            'amount'       => 'required|numeric|min:0',
            'purpose'      => 'required|string',
        ]);

        $donationModel = new donation_records();
        $donationModel->Update_Donation_Record($donationId, $validated);

        return redirect('/donation/list');
    }


    public function delete_record($donationId)
    {
        $model = new donation_records();
        $donationModel = $model->Get_Specific_Donation_Record($donationId);

        return view('donation/delete', compact('donationModel'));
    }


    public function destroy_record($donationId)
    {
        $donationModel = new donation_records();
        $donationModel->Delete_Donation_Record($donationId);

        return redirect('/donation/list'); // ← FIXED
    }


    public function receipt($donationId)
    {
        $donationModel = new donation_records();
        $donation = $donationModel->Get_Specific_Donation_Record($donationId);

        return view('donation/receipt', compact('donation'));
    }


    public function summary(Request $request)
    {
        $year = $request->input('year', date('Y'));

        $model = new donation_records();
        $monthlyData = $model->Get_Yearly_Summary($year);

        $months = [
            1=>'January',2=>'February',3=>'March',4=>'April',5=>'May',6=>'June',
            7=>'July',8=>'August',9=>'September',10=>'October',11=>'November',12=>'December'
        ];

        $finalSummary = [];

        for ($i = 1; $i <= 12; $i++) {
            $found = $monthlyData->firstWhere('month', $i);

            $finalSummary[] = [
                'month_name'       => $months[$i],
                'total_donations'  => $found->total_donations ?? 0,
                'total_amount'     => $found->total_amount ?? 0
            ];
        }

        return view('staff/summary', [
            'year' => $year,
            'summary' => $finalSummary
        ]);
    }
}
