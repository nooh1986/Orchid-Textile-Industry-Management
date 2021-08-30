<?php

namespace App\Models;

use App\Models\Strings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function strings()
    {
        return $this->hasMany(Strings::class);
    }
}
