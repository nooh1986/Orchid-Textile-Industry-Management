@extends('layouts.master')


@section('title')
	المصروفات
@endsection


@section('css')
    
@endsection


@section('page-header')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">المصروفات</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">عرض المصروفات</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')
    @include('layouts.messages_alert')

    <div class="content-body">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">إضافة مصروف</button>
                        <a href="#" class="btn btn-primary" id="print_Button" onclick="printDiv()">
                            <i class="mdi mdi-printer ml-1"></i>طباعه
                        </a>
                    </div>

                    <div class="table-responsive" id="print">
                        <table id="example" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>التاريخ</th>
                                    <th>المبلغ</th>
                                    <th>إلى</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($expenses as $expense )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $expense->date }}</td>
                                        <td>{{ $expense->amount }}</td>
                                        <td>{{ $expense->to }}</td>
                                        <td>
                                            <a href="#" data-bs-target="#edit{{ $expense->id }}" data-bs-toggle="modal"><i data-feather="edit-2" class="me-50"></i></a>
                                            
                                            <a href="#" data-bs-target="#delete{{ $expense->id }}" data-bs-toggle="modal"><i data-feather="trash" class="me-50"></i></a>
                                        </td>
                                    </tr>

                                    @include('expenses.delete')

                                    @include('expenses.edit')

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <!-- Hoverable rows end -->

    @include('expenses.create')
@endsection


@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

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
