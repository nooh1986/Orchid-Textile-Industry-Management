<?php

namespace App\Models;

use App\Models\Machine;
use App\Models\Strings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Output extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function machine()
    {
        return $this->belongsTo(Machine::class);
    }

    public function string()
    {
        return $this->belongsTo(Strings::class);
    }
}
