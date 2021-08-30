<?php

namespace Database\Seeders;

use App\Models\Machine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('machines')->delete();

        $machines = ['1', '2', '3', '4', '5', '6', '7', '8'];
        
        foreach($machines as $machine)
        {
            Machine::create(['name' => $machine]);
        }
    }
}
