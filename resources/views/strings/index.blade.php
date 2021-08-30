@extends('layouts.master')


@section('title')
	السدوات
@endsection


@section('css')
    
@endsection


@section('page-header')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">السدوات</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">عرض السدوات</li>
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
                        <a href="{{ route('string.create') }}" class="btn btn-primary">إضافة سده</a>
                    </div>

                    <div class="table-responsive">
                        <table id="example" class="table">
                            <thead>
                                <tr>
                                    <th>الرقم</th>
                                    <th>اسم الزبون</th>
                                    <th>الطول</th>
                                    <th>اللون</th>
                                    <th>العدد</th>
                                    <th>الحاله</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($strings as $string )
                                    <tr>
                                        <td>{{ $string->id }}</td>
                                        <td>{{ $string->customer->name }}</td>
                                        <td>{{ $string->long }}</td>
                                        <td>{{ $string->color }}</td>
                                        <td>{{ $string->count }}</td>
                                        <td>
                                            @if($string->status == 0)
                                                <span class="badge rounded-pill badge-light-danger me-1">قيد الانتظار</span>
                                            @elseif ($string->status == 1)
                                                <span class="badge rounded-pill badge-light-warning me-1">في العمل</span>
                                            @else
                                                <span class="badge rounded-pill badge-light-success me-1">منتهي</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('string.edit' , $string->id ) }}" ><i data-feather="edit-2" class="me-50"></i></a>
                                            
                                            <a href="#" data-bs-target="#delete{{ $string->id }}" data-bs-toggle="modal"><i data-feather="trash" class="me-50"></i></a>
                                        
                                            <a href="{{ route('string.show' , $string->id ) }}" ><i data-feather="eye" class="me-50"></i></a>
                                        </td>
                                    </tr>

                                    @include('strings.delete')
                                
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
           


   