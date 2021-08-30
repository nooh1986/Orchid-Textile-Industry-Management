@extends('layouts.master')


@section('title')
	الإنتاج
@endsection


@section('css')
    
@endsection


@section('page-header')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">الإنتاج</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">عرض الإنتاج اليومي</li>
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
                        <a href="{{ route('output.create') }}" class="btn btn-primary">إضافة إنتاج يومي</a>
                    </div>

                    <div class="table-responsive">
                        <table id="example" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>التاريخ</th>
                                    <th>رقم الماكينه</th>
                                    <th>رقم السده</th>
                                    <th>المسنن</th>
                                    <th>الكميه</th>
                                    <th>السعر</th>
                                    <th>المجموع</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($outputs as $output )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $output->date }}</td>
                                        <td>{{ $output->machine->name }}</td>
                                        <td>{{ $output->string->id }}</td>
                                        <td>{{ $output->gear }}</td>
                                        <td>{{ $output->quantity }}</td>
                                        <td>{{ $output->price }}</td>
                                        <td>{{ $output->total }}</td>
                                        <td>
                                            <a href="{{ route('output.edit' , $output->id ) }}" ><i data-feather="edit-2" class="me-50"></i></a>
                                            
                                            <a href="#" data-bs-target="#delete{{ $output->id }}" data-bs-toggle="modal"><i data-feather="trash" class="me-50"></i></a>
                                        </td>
                                    </tr>
    
                                    @include('outputs.delete')
                                   
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
    
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection    
           


   