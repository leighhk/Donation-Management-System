<?php

namespace App\Http\Controllers;

use App\Models\donation;
use App\Models\Users;
use Illuminate\Http\Request;

class donor extends Controller
{
    public function dashboard(){
        return view('donor/dashboard');
    }
    
    public function history(Request $request){
        $userId = $request->session()->get('user_id');
        $model = new donation();
        $dbresults = $model->Get_Donor_History($userId);
        $data = ['donation' => $dbresults];
        return view('donor/history', $data);
    }

    public function account(Request $request)
{
    // 1. Get logged-in user ID from session
    $userId = $request->session()->get('user_id');

    // If not logged in, redirect to login
    if (!$userId) {
        return redirect('auth/login');
    }

    // 2. Use model to retrieve user information
    $model = new Users();
    $user = $model->Get_User_By_Id($userId);

    // 3. Pass the user data to the view
    return view('donor/account', compact('user'));
}

public function edit(Request $request){
 $userId = $request->session()->get('user_id');

    if (!$userId) {
        return redirect('auth/login'); // Not logged in
    }

    $model = new Users();
    $user = $model->Get_User_By_Id($userId);

    if (!$user) {
        abort(404, 'User not found');
    }

    // Pass user data to the edit form view
    return view('/donor/account/edit', compact('user'));
}
public function update(Request $request)
{
    $userId = $request->session()->get('user_id');

    if (!$userId) {
        return redirect('auth/login');
    }

    // Validate inputs
    $validated = $request->validate([
        'name' => 'required|string',
        'username' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'address' => 'required|string',
    ]);

    $model = new Users();

    // Perform update
    $model->Update_Donor($userId, $validated);

    return redirect('/donor/account')->with('success', 'Account updated successfully.');
}
}
