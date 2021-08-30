<?php

namespace App\Interfaces;


interface AccountRepositoryInterface 
{
    public function customer_account();

    public function customer($request);

    public function machine_account();

    public function machine($request);

    public function expense_account();

    public function expense($request);

    public function profit_account();

    public function profit($request);
}