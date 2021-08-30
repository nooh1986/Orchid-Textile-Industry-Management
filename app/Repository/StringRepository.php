<?php


namespace App\Repository;

use App\Models\Strings;
use App\Models\Customer;
use App\Interfaces\StringRepositoryInterface;
use App\Models\Output;

class StringRepository implements StringRepositoryInterface 
{

    public function index()
    {
        $strings = Strings::where('status' , 0)->get();
        return view('strings.index' , compact('strings'));
    }

    public function create()
    {
        $customers = Customer::pluck('id' , 'name');
        return view('strings.create' , compact('customers'));
    }

    public function store($request)
    {
        try
        {
            $data['customer_id'] = $request->customer_id;
            $data['color']       = $request->color;
            $data['date']        = $request->date;
            $data['long']        = $request->long;
            $data['count']       = $request->count;
            $data['status']      = 0;
                        
            Strings::create($data);

            return redirect()->route('string.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        
    }

    public function show($id)
    {
        $string  = Strings::findorfail($id);
        $outputs = Output::where('string_id' , $id)->get();
        return view('strings.show' , compact('string' , 'outputs'));
    }

    public function edit($id)
    {
        $customers = Customer::pluck('id' , 'name');
        $string = Strings::findorfail($id);
        return view('strings.edit' , compact('customers' , 'string'));
    }

    public function update($request)
    {
        try
        {
            $string = Strings::findorfail($request->id);

            $data['customer_id'] = $request->customer_id;
            $data['color']       = $request->color;
            $data['date']        = $request->date;
            $data['long']        = $request->long;
            $data['count']       = $request->count;
                        
            $string->update($data);

            return redirect()->route('string.index');
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
            Strings::findorfail($request->id)->delete();

            return redirect()->route('string.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function work()
    {
        $strings = Strings::where('status' , 1)->get();
        return view('strings.work' , compact('strings'));
    }

    public function end()
    {
        $strings = Strings::where('status' , 2)->get();
        return view('strings.end' , compact('strings'));
    }

    public function ending($request)
    {
        try
        {
            $string = Strings::where('id' , $request->id);

            $data['date_off'] = $request->date_off;
            $data['status']   = 2;
            $data['price']    = Output::where('string_id' , $request->id)->sum('total');
            $data['long_aw']  = Output::where('string_id' , $request->id)->sum('quantity');

            $string->update($data);

            return redirect()->route('end');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function info_string()
    {
        $strings = Strings::pluck('id');
        return view('strings.info-string' , compact('strings'));
    }

    public function info($request)
    {
        $info = $request->string;
        $strings = Strings::pluck('id');
        $string  = Strings::findorfail($info);
        $outputs = Output::where('string_id' , $info)->get();
        return view('strings.info-string' , compact('string' , 'outputs' , 'strings' , 'info'));
    }
    
}    