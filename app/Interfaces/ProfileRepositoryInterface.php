<?php

namespace App\Interfaces;


interface ProfileRepositoryInterface
{
    public function profile();
    
    public function update($request);

    public function update_password($request);
}