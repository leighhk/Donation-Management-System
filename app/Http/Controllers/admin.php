<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\donation_records;
use App\Models\Users;
use Illuminate\Http\Request;

class admin extends Controller
{
public function dashboard(){

    return view('admin/dashboard');
}

public function accounts(){
$model = new Users();
$data = $model->Get_All_Users();
    return view('admin/accounts', compact('data'));
}

public function Add_Account(){
    return view('/account/add');
}
public function Create_Account(Request $request)
{
    // Validate input
    $validated = $request->validate([
        'name'     => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users,username',
        'email'    => 'required|email|unique:users,email',
        'password' => 'required|string|min:6',
        'phone'    => 'required|string|max:255',
        'address'  => 'nullable|string|max:255',
        'role'     => 'required|in:Donor,Finance Staff,Admin',
    ]);
    $validated['created_by'] = $request->session()->get('user_id');
    // Call the model function
    $model = new Users();
    $model->Create_User($validated);

    // Redirect back with success message
    return redirect('/admin/accounts');
}
public function Edit_Account($userId)
{
    $model = new Users();
    $Account = $model->Get_User_By_Id($userId);

    return view('account/edit', compact('Account'));
}

public function update_account(Request $request, $userId)
{
    $validated = $request->validate([
        'name'     => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users,username,' . $userId . ',user_id',
        'email'    => 'required|email|unique:users,email,' . $userId . ',user_id',
        'password' => 'nullable|string|min:6',
        'phone'    => 'required|string|max:255',
        'address'  => 'nullable|string|max:255',
        'role'     => 'required|in:Donor,Finance Staff,Admin',
    ]);

    $model = new Users();
    $model->Update_User($userId, $validated);

    return redirect('admin/accounts')->with('success', 'Account updated successfully!');
}

public function Delete_Account($userId){
        $model = new Users();
    $User = $model->Get_User_By_Id($userId);
    return view('/account/delete',compact('User'));
}

public function Destroy_Account($userId){
     $User = new Users();
    $User->Delete_Account($userId);
    return redirect('/admin/accounts');
}

public function category(){
    $model = new category();
    $category= $model->Get_All_Category();
    return view('donation/category',compact('category'));
}

public function edit_category($category_id)
{
    $model = new category();
    $category = $model->Get_Category_By_Id($category_id);

    return view('donation/category/edit', compact('category'));
}

 public function update_category(Request $request, $categoryId)
    {
        $validated = $request->validate([
            'name' => 'required|in:Education,Food,Clothes,Medical',
            'description' => 'required|string|max:255'
        ]);

        $categoryModel = new Category();
        $categoryModel->Update_Category($categoryId, $validated);

        return redirect('/donation/category')->with('success', 'Category updated successfully!');
    }

       public function donation_list()
    {
        $model = new donation_records();
        $data = $model->Get_Donation_Records();
        return view('admin/donation/list', compact('data'));
    }

        public function delete_record($donationId)
    {
        $model = new donation_records();
        $donationModel = $model->Get_Specific_Donation_Record($donationId);

        return view('admin/donation/delete', compact('donationModel'));
    }


    public function destroy_record($donationId)
    {
        $donationModel = new donation_records();
        $donationModel->Delete_Donation_Record($donationId);

        return redirect('admin/donation/list'); // ← FIXED
    }
    
}