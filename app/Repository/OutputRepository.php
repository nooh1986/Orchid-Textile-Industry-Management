<?php


namespace App\Repository;

use App\Models\Output;
use App\Models\Machine;
use App\Models\Strings;
use Illuminate\Support\Facades\DB;
use App\Interfaces\OutputRepositoryInterface;

class OutputRepository implements OutputRepositoryInterface 
{

    public function index()
    {
        $outputs = Output::all();
        return view('outputs.index' , compact('outputs'));
    }

    public function create()
    {
        $machines = Machine::pluck('id' , 'name');
        $strings = Strings::where('status' , [0 || 1])->pluck('id');
        return view('outputs.create' , compact('machines' , 'strings'));
    }

    public function store($request)
    {
        DB::beginTransaction();
        try
        {
            $data['machine_id'] = $request->machine_id;
            $data['string_id']  = $request->string_id;
            $data['date']       = $request->date;
            $data['gear']       = $request->gear;
            $data['quantity']   = $request->quantity;
            $data['price']      = $request->price;
            $data['total']      = $request->price * $request->quantity * $request->gear;
            
            Output::create($data);

            $statu = Strings::where('id', $request->string_id)->first();
            if($statu->status == 0)
            {
                $data1['status'] = 1;
                $data1['date_on'] = $request->date;

                $statu->update($data1);
            }
            
            DB::commit();
            return redirect()->route('output.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
        
    }

    public function edit($id)
    {
        $output = Output::findorfail($id);
        $machines = Machine::pluck('id' , 'name');
        return view('outputs.edit' , compact('machines' , 'output'));
    }

    public function update($request)
    {
        DB::beginTransaction();
        try
        {
            $output = Output::findorfail($request->id);

            $data['machine_id'] = $request->machine_id;
            $data['string_id']  = $request->string_id;
            $data['date']       = $request->date;
            $data['gear']       = $request->gear;
            $data['quantity']   = $request->quantity;
            $data['price']      = $request->price;
            $data['total']      = $request->price * $request->quantity * $request->gear;
            
            $output->update($data);

            $status = Strings::where('id', $request->string_id);
            $data1['status'] = 1;

            $status->update($data1);
                          
            DB::commit();
            return redirect()->route('output.index');
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
            Output::findorfail($request->id)->delete();

            return redirect()->route('output.index');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    
}    