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
                            <li class="breadcrumb-item active">حسابات المصروفات</li>
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
                        <h4 class="card-title">حسابات المصروفات</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('expenseAccount') }}" method="Post" autocomplete="off">
                            @csrf

                            <div class="row" style="justify-content: center;">
                                
                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label">من تاريخ</label>
                                        <input type="date" class="form-control" name="from" value="{{ $from ?? '' }}" />
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
    
    @if (isset($expenses))
        
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
                                    <th>المبلغ</th>
                                    <th>إلى</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($expenses as $expense )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $expense->date }}</td>
                                        <td>{{ $expense->amount }}</td>
                                        <td>{{ $expense->to }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th colspan="3" style="text-align: center;">المجموع</th>
                                    <th>{{ $total }}</th>
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