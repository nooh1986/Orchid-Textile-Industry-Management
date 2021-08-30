<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OutputRequest;
use App\Interfaces\OutputRepositoryInterface;

class OutputController extends Controller
{

    private $Output;

    public function __construct(OutputRepositoryInterface $Output)
    {
        $this->Output = $Output;
    }
    
    public function index()
    {
        return $this->Output->index();
    }

    
    public function create()
    {
        return $this->Output->create();
    }

    
    public function store(OutputRequest $request)
    {
        return $this->Output->store($request);
    }

   
    public function edit($id)
    {
        return $this->Output->edit($id);
    }

   
    public function update(OutputRequest $request)
    {
        return $this->Output->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->Output->destroy($request);
    }
}
