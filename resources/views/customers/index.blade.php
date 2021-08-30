@extends('layouts.master')


@section('title')
	الزبائن
@endsection


@section('css')
    
@endsection


@section('page-header')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">الزبائن</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">عرض الزبائن</li>
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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">إضافة زبون</button>
                    </div>

                    <div class="table-responsive">
                        <table id="example" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الاسم</th>
                                    <th>رقم الهاتف</th>
                                    <th>الحاله</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($customers as $customer )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>
                                            @if($customer->status == 1)
                                                <span class="badge rounded-pill badge-light-success me-1">مفعل</span>
                                            @else
                                                <span class="badge rounded-pill badge-light-danger me-1">غير مفعل</span>
                                            @endif
                                        <td>
                                            <a href="#" data-bs-target="#edit{{ $customer->id }}" data-bs-toggle="modal"><i data-feather="edit-2" class="me-50"></i></a>
                                            
                                            <a href="#" data-bs-target="#delete{{ $customer->id }}" data-bs-toggle="modal"><i data-feather="trash" class="me-50"></i></a>
                                        </td>
                                    </tr>

                                    @include('customers.delete')

                                    @include('customers.edit')

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
        
    @include('customers.create')

@endsection


@section('js')
    
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    
    <script>
        $(".nav li").click(function() {
            $(".nav li").removeClass('active');
            $(this).addClass('active');
        })
    </script>
    
@endsection

