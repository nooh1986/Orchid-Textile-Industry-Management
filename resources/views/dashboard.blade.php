@extends('layouts.master')


@section('title')
	لوحه التحكم
@endsection


@section('css')

@endsection


@section('page-header')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">لوحه التحكم</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">الاحصائيات</li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


@section('content')
    <!-- Dashboard Ecommerce Starts -->
    <section id="dashboard-ecommerce">
        <div class="row match-height">
            <!-- Statistics Card -->
            <div class="col-xl-12 col-md-6 col-12">
                <div class="card card-statistics">
                    <div class="card-header">
                        <h4 class="card-title">الاحصائيات الماليه</h4>
                    </div>
                    <div class="card-body statistics-body">
                        <div class="row">
                            <div class="col-xl-4 col-sm-4 col-12 mb-2 mb-xl-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-primary me-2">
                                        <div class="avatar-content">
                                            <i data-feather="trending-up" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{ \App\Models\Output::sum('total') }}</h4>
                                        <p class="card-text font-small-3 mb-0">المبيعات</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-sm-4 col-12 mb-2 mb-sm-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-danger me-2">
                                        <div class="avatar-content">
                                            <i data-feather="shopping-bag" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{ \App\Models\Expense::sum('amount') }}</h4>
                                        <p class="card-text font-small-3 mb-0">المصاريف</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-4 col-12">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-success me-2">
                                        <div class="avatar-content">
                                            <i data-feather="dollar-sign" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{ \App\Models\Output::sum('total') - \App\Models\Expense::sum('amount')}}</h4>
                                        <p class="card-text font-small-3 mb-0">صافي الربح</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics Card -->
        </div>
        <br>

        <div class="row match-height">
            <!-- Statistics Card -->
            <div class="col-xl-12 col-md-6 col-12">
                <div class="card card-statistics">
                    <div class="card-header">
                        <h4 class="card-title">إحصائيات الإنتاج</h4>
                    </div>
                    <div class="card-body statistics-body">
                        <div class="row">
                            <div class="col-xl-4 col-sm-4 col-12 mb-2 mb-xl-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-primary me-2">
                                        <div class="avatar-content">
                                            <i data-feather="user" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{ \App\Models\Customer::count() }}</h4>
                                        <p class="card-text font-small-3 mb-0">الزبائن</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-sm-4 col-12 mb-2 mb-sm-0">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-danger me-2">
                                        <div class="avatar-content">
                                            <i data-feather="slack" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{ \App\Models\Strings::count() }}</h4>
                                        <p class="card-text font-small-3 mb-0">عدد السدوات</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-4 col-12">
                                <div class="d-flex flex-row">
                                    <div class="avatar bg-light-success me-2">
                                        <div class="avatar-content">
                                            <i data-feather="archive" class="avatar-icon"></i>
                                        </div>
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="fw-bolder mb-0">{{ \App\Models\Output::sum('quantity') }}</h4>
                                        <p class="card-text font-small-3 mb-0">كميه الانتاج</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Statistics Card -->
        </div>
        
    </section>
    <!-- Dashboard Ecommerce ends -->
@endsection


@section('js')
    
@endsection
