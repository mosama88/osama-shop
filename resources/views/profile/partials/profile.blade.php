@php
    use App\Models\User;
    $user = User::get();
@endphp





@extends('layouts.adminpanel.master')
@section('title', 'Home | Admin Panel')
@section('content-adminpanel')
@section('title-page-h3', 'الصفحه الشخصيه')
@section('title-page-li', 'الصفحه الشخصيه')
@section('title-page-describe', 'الصفحه الشخصيه')



<div class="container-fluid">
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="profile-details text-center">
                        <img src="assets/images/dashboard/designer.jpg" alt=""
                            class="img-fluid img-90 rounded-circle blur-up lazyloaded">
                        <h5 class="f-w-600 mb-0">{{ Auth::user()->name }}</h5>
                        <span>{{ Auth::user()->email }}</span>
                        <div class="social">
                            <div class="form-group btn-showcase">
                                <button class="btn social-btn btn-fb d-inline-block"> <i
                                        class="fa fa-facebook"></i></button>
                                <button class="btn social-btn btn-twitter d-inline-block"><i
                                        class="fa fa-google"></i></button>
                                <button class="btn social-btn btn-google d-inline-block me-0"><i
                                        class="fa fa-twitter"></i></button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="project-status">
                        <h5 class="f-w-600">Employee Status</h5>
                        <div class="media">
                            <div class="media-body">
                                <h6>Performance<span class="pull-right">80%</span></h6>
                                <div class="progress sm-progress-bar">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h6>Overtime <span class="pull-right">60%</span></h6>
                                <div class="progress sm-progress-bar">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 60%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h6>Leaves taken<span class="pull-right">70%</span></h6>
                                <div class="progress sm-progress-bar">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 70%"
                                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card tab2-card">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-bs-toggle="tab"
                                href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user me-2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>Profile</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="top-tabContent">
                        <div class="tab-pane fade active show" id="top-profile" role="tabpanel"
                            aria-labelledby="top-profile-tab">
                            <h5 class="f-w-600">Profile</h5>
                            <div class="table-responsive profile-table">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>الاسم:</td>
                                            <td>{{ Auth::user()->name }} </td>
                                        </tr>

                                        <tr>
                                            <td>البريد الالكترونى:</td>
                                            <td>{{ Auth::user()->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>الجنس:</td>
                                            <td>{{ Auth::user()->gender }}</td>
                                        </tr>
                                        <tr>
                                            <td>الموبايل:</td>
                                            <td>{{ Auth::user()->mobile }}</td>
                                        </tr>
                                        <tr>
                                            <td>تاريخ الميلاد:</td>
                                            <td>{{ Auth::user()->bd }}</td>
                                        </tr>
                                        <tr>
                                            <td>البلد:</td>
                                            <td>{{ Auth::user()->country }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mx-auto mt-4">

                                <a href="{{ route('profile.update') }}" type="button" class="btn btn-primary">
                                    تحديث بيانات</a>
                            </div>
                        </div>
































                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Container-fluid Ends-->
</div>

@endsection
