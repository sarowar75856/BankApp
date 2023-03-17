@extends('backend.layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="page-wrapper">

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title"> Show Balance </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Show Balance</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div id="emp_profile" class="pro-overview tab-pane fade show active">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card profile-box flex-fill">
                        <div class="card-body">
                            <h3 class="card-title">Bank information</h3>
                            <ul class="personal-info">

                                <li>
                                    <div class="title">Customer Account Number</div>
                                    <div class="text">{{ $account->account_id }}</div>
                                </li>

                                <li>
                                    <div class="title">Customer name</div>
                                    <div class="text">{{ $account->name}}</div>
                                </li>
                                <li>
                                    <div class="title">Customer NID</div>
                                    <div class="text">{{ $account->nid_number}}</div>
                                </li>
                                <li>
                                    <div class="title">Customer Mobile</div>
                                    <div class="text">{{ $account->mobile}}</div>
                                </li>
                                <li>
                                    <div class="title">Customer Balance</div>
                                    <div class="text">{{ $account->balance}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- /Page Content -->

</div>
@endsection
