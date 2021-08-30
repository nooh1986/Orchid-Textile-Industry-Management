@extends('layouts.master')


@section('title')
	السدوات
@endsection


@section('css')

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        @media print {
            #print_Button {
                display: none;
            }
        }
    </style>
@endsection


@section('page-header')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">السدوات</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">معلومات السده</li>
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
                        <h4 class="card-title">معلومات السده</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('info') }}" method="Post" autocomplete="off">
                            @csrf

                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">رقم السده</label>
                                        <select class="js-example-basic-single" id="basicSelect" name="string">
                                            <option value="{{ $info ?? '' }}" selected disabled>{{ $info ?? '---اختر---' }}</option>
                                            @foreach ($strings as $id)
                                                <option value="{{ $id }}"> {{ $id }}</option>
                                            @endforeach
                                        </select>
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

    @if (isset($string))
    <div id="print">          
        <div class="row" id="table-borderless" style="justify-content: center;">
            <div class="col-10"> 
                <div class="card">
                    <div class="card-header" id="print_Button">
                        <a href="#" class="btn btn-primary"  onclick="printDiv()">
                            <i class="mdi mdi-printer ml-1"></i>طباعه
                        </a>
                    </div>
                    <br>
                    <div class="table-responsive" >
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>رقم السده</th>
                                    <th>صاحب السده</th>
                                    <th>حاله السده</th>
                                    <th>لون السده</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>{{ $string->id }}</th>
                                    <th>{{ $string->customer->name }}</th>
                                    <th>
                                        @if($string->status == 0)
                                            <span class="badge rounded-pill badge-light-danger me-1">قيد الانتظار</span>
                                        @elseif ($string->status == 1)
                                            <span class="badge rounded-pill badge-light-warning me-1">في العمل</span>
                                        @else
                                            <span class="badge rounded-pill badge-light-success me-1">منتهي</span>
                                        @endif
                                    </th>            
                                    <th>{{ $string->color }}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row" id="table-borderless" style="justify-content: center;">
            <div class="col-10"> 
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless">                    
                            <thead>
                                <tr>
                                    <th>العدد</th>
                                    <th>الطول</th>
                                    <th>الطول بعد العمل</th>
                                    <th>الكلفه</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <th>{{ $string->count }}</th>
                                    <th>{{ $string->long }}</th>
                                    <th>{{ $string->long_aw }}</th>
                                    <th>{{ $string->price }}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row" id="table-borderless" style="justify-content: center;">
            <div class="col-8"> 
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>تاريخ الوصول</th>
                                    <th>تاريخ بدء العمل</th>
                                    <th>تاريخ الانتهاء</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>{{ $string->date }}</th>
                                    <th>{{ ($string->date_on == null ? '-' : $string->date_on) }}</th>
                                    <th>{{ ($string->date_off == null ? '-' : $string->date_off) }}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row" id="table-borderless" style="justify-content: center;">
            <div class="col-10"> 
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-borderless">                    
                            <thead>
                                <tr>
                                    <th>التاريخ</th>
                                    <th>رقم الماكينه</th>
                                    <th>المسنن</th>
                                    <th>الكميه</th>
                                    <th>السعر</th>
                                    <th>التكلفه</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($outputs as $output)
                                    <tr>
                                        <th>{{ $output->date }}</th>
                                        <th>{{ $output->machine->name }}</th>
                                        <th>{{ $output->gear }}</th>
                                        <th>{{ $output->quantity }}</th>
                                        <th>{{ $output->price }}</th>
                                        <th>{{ $output->total }}</th>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif 
    
         
@endsection
   
@section('js')

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

@endsection