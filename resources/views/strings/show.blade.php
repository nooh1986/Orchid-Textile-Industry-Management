@extends('layouts.master')


@section('title')
	معلومات السده
@endsection


@section('css')
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
<br>
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
@endsection


@section('js')
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
@endsection    
           


   