<?php


namespace App\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\ProfileRepositoryInterface;

class ProfileRepository implements ProfileRepositoryInterface 
{

    public function profile()
    {
        return view('profile');
    }

    public function update($request)
    {
        try
        {
            $user = User::findorfail($request->id);

            $data['name']  = $request->name;
            $data['email'] = $request->email;
                        
            $user->update($data);
             
            return redirect()->route('profile');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update_password($request)
    {
        try
        {
            $user = User::findorfail($request->id);

            $data['password'] = Hash::make($request->password);
                       
            $user->update($data);

            return redirect()->route('login');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    
}    