<?php

namespace App\Providers;

use App\Repository\OutputRepository;
use App\Repository\StringRepository;
use App\Repository\AccountRepository;
use App\Repository\ExpenseRepository;
use App\Repository\ProfileRepository;
use App\Repository\CustomerRepository;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\OutputRepositoryInterface;
use App\Interfaces\StringRepositoryInterface;
use App\Interfaces\AccountRepositoryInterface;
use App\Interfaces\ExpenseRepositoryInterface;
use App\Interfaces\ProfileRepositoryInterface;
use App\Interfaces\CustomerRepositoryInterface;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
        $this->app->bind(ExpenseRepositoryInterface::class, ExpenseRepository::class);
        $this->app->bind(StringRepositoryInterface::class, StringRepository::class);
        $this->app->bind(OutputRepositoryInterface::class, OutputRepository::class);
        $this->app->bind(AccountRepositoryInterface::class, AccountRepository::class);
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
