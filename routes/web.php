<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\StringController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;



Route::group(['middleware' => 'auth:web'],function(){
 
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    
    Route::resource('customer' , CustomerController::class);

    Route::resource('expense' , ExpenseController::class);

    Route::resource('string' , StringController::class);
    Route::get('string-work' , [StringController::class , 'work'])->name('work');
    Route::get('string-end' , [StringController::class , 'end'])->name('end');
    Route::post('ending' , [StringController::class , 'ending'])->name('ending');
    
    Route::get('info-string' , [StringController::class , 'info_string'])->name('info-string');
    Route::post('info' , [StringController::class , 'info'])->name('info');

    Route::resource('output' , OutputController::class);

    Route::get('customer-account' , [AccountController::class , 'customer_account'])->name('customer-account');
    Route::post('customer-account' , [AccountController::class , 'customer'])->name('customerAccount');

    Route::get('machine-account' , [AccountController::class , 'machine_account'])->name('machine-account');
    Route::post('machine-account' , [AccountController::class , 'machine'])->name('machineAccount');

    Route::get('expense-account' , [AccountController::class , 'expense_account'])->name('expense-account');
    Route::post('expense-account' , [AccountController::class , 'expense'])->name('expenseAccount');

    Route::get('profit-account' , [AccountController::class , 'profit_account'])->name('profit-account');
    Route::post('profit-account' , [AccountController::class , 'profit'])->name('profitAccount');

    Route::get('profile' , [ProfileController::class , 'profile'])->name('profile');
    Route::post('profile' , [ProfileController::class , 'update'])->name('update');
    Route::post('account' , [ProfileController::class , 'update_password'])->name('update_password');

    Route::get('print/{invoices}' , [AccountController::class , 'print'])->name('print');

    Route::get('export', [CustomerController::class , 'export']);

});    


require __DIR__.'/auth.php';
