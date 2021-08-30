@extends('layouts.master')


@section('title')
    طباعه
@endsection


@section('css')
    
@endsection


@section('page-header')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">طباعه</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">فاتورة</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <!-- BEGIN: Content-->
    
            <div class="content-body">
                <section class="invoice-preview-wrapper">
                    <div class="row invoice-preview">
                        <!-- Invoice -->
                        <div class="col-xl-9 col-md-8 col-12">
                            <div class="card invoice-preview-card">
                                <div class="card-body invoice-padding pb-0">
                                    <!-- Header starts -->
                                    <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">
                                        <div>
                                            <div class="logo-wrapper">
                                                <img src="{{ URL::asset('app-assets//images/orchid_full.svg')}}" height="25">
                                            </div>
                                            <p class="card-text mb-25">شركه اوركيد لإنتاج الإقمشه</p>
                                            <p class="card-text mb-25">مصر - القاهرة - مدينتي</p>
                                            <p class="card-text mb-0">+20 111 586 4163</p>
                                        </div>
                                        <div class="mt-md-0 mt-2">
                                            <h4 class="invoice-title">
                                                فاتوره
                                            </h4>
                                            
                                            <div class="invoice-date-wrapper">
                                                <p class="invoice-date-title">تاريخ الفاتورة:</p>
                                                <p class="invoice-date">25/08/2020</p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- Header ends -->
                                </div>

                                <hr class="invoice-spacing" />

                                <!-- Address and Contact starts -->
                                <div class="card-body invoice-padding pt-0">
                                    <div class="row invoice-spacing">
                                        <div class="col-xl-8 p-0">
                                            <h6 class="mb-2"> فاتورة إلى:</h6>
                                            <h6 class="mb-25">Thomas shelby</h6>
                                        </div>
                                        <div class="col-xl-4 p-0 mt-xl-0 mt-2">
                                            <h6 class="mb-2"> تفاصيل الدفع:</h6>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="pe-1"> من:</td>
                                                        <td><span class="fw-bold">$12,110.55</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pe-1">إلى:</td>
                                                        <td>American Bank</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pe-1">المبلغ:</td>
                                                        <td>United States</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Address and Contact ends -->

                                <!-- Invoice Description starts -->
                                <div class="table-responsive">
                                    <table id="example" class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>تاريخ التشغيل</th>
                                                <th>تاريخ الإنتهاء</th>
                                                <th>الطول النهائي</th>
                                                <th>السعر</th>
                                            </tr>
                                        </thead>
            
                                        {{-- <tbody>
                                            @foreach ($invoices as $invoice)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $invoice->date_on }}</td>
                                                    <td>{{ $invoice->date_off }}</td>
                                                    <td>{{ $invoice->long_aw }}</td>
                                                    <td>{{ $invoice->price }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody> --}}
            
                                        <tfoot>
                                            <tr>
                                                <th colspan="5" style="text-align: center;">المجموع</th>
                                                <th colspan="2" style="text-align: center;"></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <!-- /Invoice -->

                        <!-- Invoice Actions -->
                        <div class="col-xl-3 col-md-4 col-12 invoice-actions mt-md-0 mt-2">
                            <div class="card">
                                <div class="card-body">
                                    <button class="btn btn-outline-secondary w-100 btn-download-invoice mb-75">Download</button>
                                    <a class="btn btn-outline-secondary w-100 mb-75" href="./app-invoice-print.html" target="_blank"> Print </a>
                                </div>
                            </div>
                        </div>
                        <!-- /Invoice Actions -->
                    </div>
                </section>
                
            </div>
        </div>
    </div>
    <!-- END: Content-->
    
@endsection


@section('js')
    
@endsection