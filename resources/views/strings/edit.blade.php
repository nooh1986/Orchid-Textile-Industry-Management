@extends('layouts.master')


@section('title')
	تعديل معلومات سده
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
                            <li class="breadcrumb-item">عرض السدوات</li>
                            <li class="breadcrumb-item active">تعديل سده</li>
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
                        <h4 class="card-title">تعديل سده</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('string.update' , 'test') }}" method="Post" autocomplete="off">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="id" value="{{ $string->id }}">

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">اسم الزبون</label>
                                        <select class="form-select" id="basicSelect" name="customer_id">
                                            @foreach ($customers as $name => $id)
                                                <option value="{{ $id }}" {{ $id == $string->customer_id ? 'selected':"" }}> {{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @error('customer_id')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                
                                <div class="col-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-vertical">التاريخ</label>
                                        <input type="date" id="email-id-vertical" class="form-control" name="date" value="{{ $string->date }}" />
                                        @error('date')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                
                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="contact-info-vertical">الطول</label>
                                        <input type="number" id="contact-info-vertical" step="0.01" class="form-control" name="long" value="{{ $string->long }}" />
                                        @error('long')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                
                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="password-vertical">العدد</label>
                                        <input type="number" id="password-vertical" class="form-control" name="count" value="{{ $string->count }}" />
                                        @error('count')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            
                                <div class="col-4">
                                    <div class="mb-1">
                                        <label class="form-label" for="email-id-vertical">اللون</label>
                                        <input type="text" id="email-id-vertical" class="form-control" name="color" value="{{ $string->color }}" />
                                        @error('color')<div class="alert alert-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>    
                            <br>

                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary me-1">تعديل</button>
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