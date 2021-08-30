<?php

namespace App\Models;

use App\Models\Output;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Strings extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'strings';

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function outputs()
    {
        return $this->hasMany(Output::class);
    }
}
