<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StringRequest;
use App\Interfaces\StringRepositoryInterface;

class StringController extends Controller
{
    
    private $String;

    public function __construct(StringRepositoryInterface $String)
    {
        $this->String = $String;
    }

    public function index()
    {
        return $this->String->index();
    }

    
    public function create()
    {
        return $this->String->create();
    }

    
    public function store(StringRequest $request)
    {
        return $this->String->store($request);
    }

    
    public function show($id)
    {
        return $this->String->show($id);
    }

   
    public function edit($id)
    {
        return $this->String->edit($id);
    }

   
    public function update(StringRequest $request)
    {
        return $this->String->update($request);
    }

    
    public function destroy(Request $request)
    {
        return $this->String->destroy($request);
    }


    public function work()
    {
        return $this->String->work();
    }


    public function end()
    {
        return $this->String->end();
    }


    public function ending(Request $request)
    {
        return $this->String->ending($request);
    }


    public function info_string()
    {
        return $this->String->info_string();
    }

    
    public function info(Request $request)
    {
        return $this->String->info($request);
    }
}
