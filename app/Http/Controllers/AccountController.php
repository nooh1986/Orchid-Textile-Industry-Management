<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\AccountRepositoryInterface;

class AccountController extends Controller
{
    private $Account;

    public function __construct(AccountRepositoryInterface $Account)
    {
        $this->Account = $Account;
    }

    public function customer_account()
    {
        return $this->Account->customer_account();
    }

    public function customer(Request $request)
    {
        return $this->Account->customer($request);
    }

    public function machine_account()
    {
        return $this->Account->machine_account();
    }

    public function machine(Request $request)
    {
        return $this->Account->machine($request);
    }

    public function expense_account()
    {
        return $this->Account->expense_account();
    }

    public function expense(Request $request)
    {
        return $this->Account->expense($request);
    }

    public function profit_account()
    {
        return $this->Account->profit_account();
    }

    public function profit(Request $request)
    {
        return $this->Account->profit($request);
    }

    public function print($invoices)
    {
        return view('accounts.invoice' , compact('invoices'));
    }
}
