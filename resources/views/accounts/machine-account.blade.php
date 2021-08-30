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
                            <li class="breadcrumb-item active">حسابات الماكينات</li>
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
                        <h4 class="card-title">حسابات الماكينات</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('machineAccount') }}" method="Post" autocomplete="off">
                            @csrf

                            <div class="row">
                                
                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">رقم الماكينه</label>
                                        <select class="form-select" id="basicSelect" name="machine_id">
                                            <option value="{{ $machine ?? '' }}">{{ $machine ?? '---اختر---' }}</option>
                                            <option value="الكل">الكل</option>  
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
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

    @if (isset($outputs))
        
    <div class="content-body">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table id="example" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>التاريخ</th>
                                    <th>رقم السده</th>
                                    <th>رقم الماكينه</th>
                                    <th>المسنن</th>
                                    <th>الكميه</th>
                                    <th>السعر</th>
                                    <th>الإجمالي</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($outputs as $output)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $output->date }}</td>
                                        <td>{{ $output->string->id }}</td>
                                        <td>{{ $output->machine->name }}</td>
                                        <td>{{ $output->gear }}</td>
                                        <td>{{ $output->quantity }}</td>
                                        <td>{{ $output->price }}</td>
                                        <td>{{ $output->total }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th colspan="5" style="text-align: center;">المجموع</th>
                                    <th colspan="3" style="text-align: center;">{{ $total }}</th>
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