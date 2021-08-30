@extends('layouts.master')


@section('title')
	الملف الشخصي
@endsection


@section('css')
    
@endsection


@section('page-header')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">الملف الشخصي</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">تحديث الملف الشخصي</li>
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
        <!-- account setting page -->
        <section id="page-account-settings">
            <div class="row">
                <!-- left menu section -->
                <div class="col-md-3 mb-2 mb-md-0">
                    <ul class="nav nav-pills flex-column nav-left">
                        <!-- general -->
                        <li class="nav-item">
                            <a class="nav-link active" id="account-pill-general" data-bs-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                <i data-feather="user" class="font-medium-3 me-1"></i>
                                <span class="fw-bold">المعلومات العامه</span>
                            </a>
                        </li>
                        <!-- change password -->
                        <li class="nav-item">
                            <a class="nav-link" id="account-pill-password" data-bs-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                <i data-feather="lock" class="font-medium-3 me-1"></i>
                                <span class="fw-bold">تغير كلمه المرور</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--/ left menu section -->

                <!-- right content section -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- general tab -->
                                <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                    
                                    <!-- form -->
                                    <form class="validate-form mt-2" action="{{ route('update') }}" method="post">
                                        @csrf

                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="account-username">الاسم</label>
                                                    <input type="text" class="form-control" id="account-username" name="name" value="{{ Auth::user()->name }}" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 col-sm-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="account-e-mail">البريد الإلكتروني</label>
                                                    <input type="email" class="form-control" id="account-e-mail" name="email" value="{{ Auth::user()->email }}" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mt-2 me-1">تعديل</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--/ form -->
                                </div>
                                <!--/ general tab -->

                                <!-- change password -->
                                <div class="tab-pane fade" id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                    <!-- form -->
                                    <form class="validate-form" action="{{ route('update_password') }}" method="post">
                                        @csrf

                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="account-new-password">كلمه السر الجديدة</label>
                                                    <div class="input-group form-password-toggle input-group-merge">
                                                        <input type="password" id="account-new-password" name="password" class="form-control" placeholder="New Password" />
                                                        <div class="input-group-text cursor-pointer">
                                                            <i data-feather="eye"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="account-retype-new-password">إعادة كلمه السر</label>
                                                    <div class="input-group form-password-toggle input-group-merge">
                                                        <input type="password" class="form-control" id="account-retype-new-password" name="password_confirmation" placeholder="New Password" />
                                                        <div class="input-group-text cursor-pointer"><i data-feather="eye"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1 mt-1">تعديل</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--/ form -->
                                </div>
                                <!--/ change password -->
                              
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ right content section -->
            </div>
        </section>
        <!-- / account setting page -->

    </div>
@endsection



@section('js')
    
@endsection  