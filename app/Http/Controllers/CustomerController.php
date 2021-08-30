<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\CustomersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\CustomerRequest;
use App\Interfaces\CustomerRepositoryInterface;

class CustomerController extends Controller
{
    
    private $Customer;

    public function __construct(CustomerRepositoryInterface $Customer)
    {
        $this->Customer = $Customer;
    }

    public function index()
    {
        return $this->Customer->index();
    }

    
    public function store(CustomerRequest $request)
    {
        return $this->Customer->store($request);
    }

   
    public function update(CustomerRequest $request)
    {
        return $this->Customer->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Customer->destroy($request);
    }

    public function export() 
    {
        return Excel::download(new CustomersExport, 'customers.xlsx');
    }
}
