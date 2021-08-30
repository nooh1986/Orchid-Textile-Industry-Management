@extends('layouts.master')


@section('title')
	الحسابات
@endsection


@section('css')
    
@endsection


@section('page-header')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">الحسابات</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">حسابات الزبائن</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">حسابات الزبائن</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('customerAccount') }}" method="Post" autocomplete="off">
                            @csrf

                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">اسم الزبون</label>
                                        <select class="form-select" id="basicSelect" name="customer_id">
                                            <option value="" selected disabled>---اختر---</option>
                                            @foreach ($customers as $name => $id)
                                                <option value="{{ $id }}"> {{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label">من تاريخ</label>
                                        <input type="date" class="form-control" name="from" value="{{ $from ?? '' }}"/>
                                    </div>
                                </div>
                            
                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label">إلى تاريخ</label>
                                        <input type="date" class="form-control" name="to" value="{{ $to ?? '' }}"/>
                                    </div>
                                </div>
                            </div>    
                            <br>

                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary me-1">بحث</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    @if (isset($invoices))
        
    <div class="content-body">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    {{-- <div class="card-header">
                        <a href="{{ route('print' , $invoices) }}" class="btn btn-primary">طباعه</a>
                    </div> --}}
                    <br>
                    <div style=" margin: 0 auto;">
                        <h4>
                        حساب السيد: {{ \App\Models\Customer::where('id' , $customer)->first()->name; }}
                        </h4>
                    </div> 
                    <div class="table-responsive">
                        <table id="example" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>رقم السده</th>
                                    <th>تاريخ التشغيل</th>
                                    <th>تاريخ الإنتهاء</th>
                                    <th>الطول النهائي</th>
                                    <th>السعر</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($invoices as $invoice)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><a href="{{ route('string.show' , $invoice->id) }}">{{ $invoice->id }}</a></td>
                                        <td>{{ $invoice->date_on }}</td>
                                        <td>{{ $invoice->date_off }}</td>
                                        <td>{{ $invoice->long_aw }}</td>
                                        <td>{{ $invoice->price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th colspan="4" style="text-align: center;">المجموع</th>
                                    <th colspan="2" style="text-align: center;">{{ $total }}</th>
                                </tr>
                            </tfoot>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>    
    </div>
    @endif    
     
@endsection
   
@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script> 
@endsection