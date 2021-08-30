<?php


namespace App\Repository;

use App\Models\Customer;
use App\Interfaces\AccountRepositoryInterface;
use App\Models\Expense;
use App\Models\Output;
use App\Models\Strings;

class AccountRepository implements AccountRepositoryInterface 
{

    public function customer_account()
    {
        $customers = Customer::pluck('id' , 'name');
        return view('accounts.customer-account' , compact('customers'));
    }

    public function customer($request)
    {
        if($request->from == '' && $request->to == '')
        {
            $customers = Customer::pluck('id' , 'name');
            $customer = $request->customer_id;
            $invoices = Strings::where('customer_id' , $customer)->where('status', 2)->orderBy('date', 'DESC')->get();
            $total = $invoices->sum('price');
            return view('accounts.customer-account' , compact('invoices' , 'total' , 'customer' , 'customers'));
        }

        else
        {
            $from = date($request->from);
            $to = date($request->to);
            $customer = $request->customer_id;
            $customers = Customer::pluck('id' , 'name');
            $invoices = Strings::where('customer_id' , $customer)->where('status', 2)->whereBetween('date',[$from , $to])->orderBy('date', 'DESC')->get();
            $total = $invoices->sum('price');
            return view('accounts.customer-account' , compact('invoices' , 'total' , 'customer' , 'customers' , 'from' , 'to'));
        }
    }

    public function machine_account()
    {
        return view('accounts.machine-account');
    }

    public function machine($request)
    {
        if($request->machine_id ==  'الكل')
        {
            if($request->from == '' && $request->to == '')
            {
                $machine = $request->machine_id;
                $outputs = Output::all();
                $total = Output::sum('total');
                return view('accounts.machine-account' , compact('outputs' , 'total' , 'machine'));
            }

            else
            {
                $machine = $request->machine_id;
                $from = date($request->from);
                $to = date($request->to);
                $outputs = Output::whereBetween('date',[$from , $to])->get();
                $total = Output::whereBetween('date',[$from , $to])->sum('total');
                return view('accounts.machine-account' , compact('outputs' , 'total' , 'from' , 'to' , 'machine'));
            }
        }

        else
        {
            if($request->from == '' && $request->to == '' )
            {
                $machine = $request->machine_id;
                $outputs = Output::where('machine_id', $request->machine_id)->get();
                $total = Output::where('machine_id', $machine)->sum('total');
                return view('accounts.machine-account' , compact('outputs' , 'total' , 'machine'));
            }

            else
            {
                $from = date($request->from);
                $to = date($request->to);
                $machine = $request->machine_id;
                $outputs = Output::whereBetween('date',[$from , $to])->where('machine_id', $machine)->get();
                $total = Output::whereBetween('date',[$from , $to])->where('machine_id', $machine)->sum('total');
                return view('accounts.machine-account' , compact('outputs' , 'total' , 'from' , 'to' , 'machine'));
            }
        }
    }

    public function expense_account()
    {
        return view('accounts.expense-account');
    }

    public function expense($request)
    {
        if($request->from == '' && $request->to == '')
        {
            $expenses = Expense::all();
            $total = Expense::sum('amount');
            return view('accounts.expense-account' , compact('expenses' , 'total'));
        }
        else
        {
            $from = date($request->from);
            $to = date($request->to);
            $expenses = Expense::whereBetween('date',[$from , $to])->get();
            $total = Expense::whereBetween('date',[$from , $to])->sum('amount');
            return view('accounts.expense-account' , compact('expenses' , 'total' , 'from' , 'to'));
        }
    }
     
    public function profit_account()
    {
        return view('accounts.profit-account');
    }

    public function profit($request)
    {
        if($request->from == '' && $request->to == '')
        {
            $profit = Output::sum('total');
            $expense = Expense::sum('amount');
            return view('accounts.profit-account' , compact('profit' , 'expense'));
        }
        else
        {
            $from = date($request->from);
            $to = date($request->to);
            $profit = Output::whereBetween('date',[$from , $to])->sum('total');
            $expense = Expense::whereBetween('date',[$from , $to])->sum('amount');
            return view('accounts.profit-account' , compact('expense' , 'profit' , 'from' , 'to'));
        }
    }

    
}    