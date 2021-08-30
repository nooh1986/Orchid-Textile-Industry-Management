<?php


namespace App\Repository;

use App\Models\Customer;
use App\Interfaces\CustomerRepositoryInterface;

class CustomerRepository implements CustomerRepositoryInterface 
{

    public function index()
    {
        $customers = Customer::all();
        return view('customers.index' , compact('customers'));
    }

    public function store($request)
    {
        try
        {
            $data['name']     = $request->name;
            $data['phone']    = $request->phone;
            
            Customer::create($data);

            return redirect()->route('customer.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request)
    {
        try
        {
            $customer = Customer::findorfail($request->id);

            $data['name']   = $request->name;
            $data['phone']  = $request->phone;
            $data['status'] = $request->status;
            
            $customer->update($data);

            return redirect()->route('customer.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        try
        {
            Customer::findorfail($request->id)->delete();

            return redirect()->route('customer.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    
}    