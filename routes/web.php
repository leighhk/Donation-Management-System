<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\Auth;
use App\Http\Controllers\donation;
use App\Http\Controllers\donor;
use App\Http\Controllers\finance_staff;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home',[donation::class, 'dashboard']);
Route::get('auth/login',[Auth::class, 'Show_LogIn']);
Route::post('auth/login',[Auth::class, 'login']);
Route::post('auth/register',[Auth::class, 'register']);
Route::post('auth/logout',[Auth::class, 'logout']);
Route::get('auth/donor',[donation::class, 'donor']);

Route::middleware(['donor'])->group(function () {
Route::get('/donor/dashboard',[donor::class, 'dashboard']);
Route::get('/donor/history',[donor::class, 'history']);
Route::get('/donor/account',[donor::class, 'account']);
Route::get('/donor/account/edit',[donor::class, 'edit']);
Route::post('/donor/account/update', [donor::class, 'update']);
});

Route::middleware(['staff'])->group(function () {
Route::get('/staff/dashboard',[finance_staff::class, 'dashboard']);
Route::get('/donation/add',[finance_staff::class, 'donation_add']);
Route::post('/donation/create',[finance_staff::class, 'donation_creation']);
Route::get('/donation/list',[finance_staff::class, 'donation_list']);
Route::get('/donation/{donationId}/edit/',[finance_staff::class, 'edit_record']);
Route::post('/donation/{donationId}/update/',[finance_staff::class, 'update_record']);
Route::get('/donation/{donationId}/delete/',[finance_staff::class, 'delete_record']);
Route::get('/donation/{donationId}/destroy/',[finance_staff::class, 'destroy_record']);
Route::get('/donation/{donationId}/receipt/',[finance_staff::class, 'receipt']);
Route::get('/staff/summary/',[finance_staff::class, 'summary']);
});

Route::middleware(['admin'])->group(function () {
Route::get('/admin/dashboard',[admin::class, 'dashboard']);
Route::get('/admin/accounts',[admin::class, 'accounts']);
Route::get('/account/add',[admin::class, 'Add_Account']);
Route::post('/account/create',[admin::class, 'Create_Account']);
Route::get('/account/{userid}/edit',[admin::class, 'Edit_Account']);
Route::post('/account/{userid}/update',[admin::class, 'Update_Account']);
Route::get('/account/{userid}/delete',[admin::class, 'Delete_Account']);
Route::get('/account/{userid}/destroy',[admin::class, 'Destroy_Account']);
Route::get('/donation/category',[admin::class, 'category']);
Route::get('admin/donation/{donationId}/delete/',[admin::class, 'delete_record']);
Route::get('admin/donation/{donationId}/destroy/',[admin::class, 'destroy_record']);
Route::get('/donation/category/{category_id}/edit',[admin::class, 'edit_category']);
Route::post('/donation/category/{category_id}/update',[admin::class, 'update_category']);
Route::get('/admin/donation/list',[admin::class, 'donation_list']);
});