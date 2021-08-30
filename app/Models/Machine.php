<?php

namespace App\Models;

use App\Models\Output;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Machine extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = false;

    public function outputs()
    {
        return $this->hasMany(Output::class);
    }
}
