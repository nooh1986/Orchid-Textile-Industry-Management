@extends('layouts.master')


@section('title')
	تعديل إنتاج يومي
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
                            <li class="breadcrumb-item">عرض الانتاج اليومي</li>
                            <li class="breadcrumb-item active">تعديل الإنتاج اليومي</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('content')

@include('layouts.messages_alert')

    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">تعديل إنتاج يومي</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('output.update' , 'test') }}" method="Post" autocomplete="off">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="id" value="{{ $output->id }}">

                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">رقم الماكينه</label>
                                        <select class="form-select" id="basicSelect" name="machine_id">
                                            @foreach ($machines as $name => $id)
                                                <option value="{{ $id }}" {{ $id == $output->machin_id ? 'selected':"" }}> {{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @error('machine_id')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                
                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-vertical">رقم السده</label>
                                        <input type="text" class="form-control" name="string_id" value="{{ $output->string->id }}" readonly/>
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-vertical">التاريخ</label>
                                        <input type="date" id="email-id-vertical" class="form-control" name="date" value="{{ $output->date }}"/>
                                        @error('date')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                
                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="contact-info-vertical">المسنن</label>
                                        <input type="text" step="0.01" id="contact-info-vertical" class="form-control" name="gear" value="{{ $output->gear }}"/>
                                        @error('gear')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                
                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="password-vertical">الكميه</label>
                                        <input type="number" step="0.01" id="password-vertical" class="form-control" name="quantity" value="{{ $output->quantity }}"/>
                                        @error('quantity')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            
                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="password-vertical">السعر</label>
                                        <input type="number" step="0.01" id="password-vertical" class="form-control" name="price" value="{{ $output->price }}"/>
                                        @error('price')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>    
                            <br>

                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary me-1">حفظ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

@endsection

@section('js')
    
@endsection  