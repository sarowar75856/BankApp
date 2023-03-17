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
                    <h3 class="page-title"> Transfer Balance </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Transfer Balance</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('account.transfer') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="row filter-row">
                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-12">
                                        <div class="form-group form-focus">
                                            <input type="text" name="from_account" class="form-control floating">
                                            <label class="focus-label">From Account</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-12">
                                        <div class="form-group form-focus">
                                            <input type="text" name="to_account" class="form-control floating">
                                            <label class="focus-label">To Account</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-12">
                                        <div class="form-group form-focus">
                                            <input type="text" name="amount" class="form-control floating">
                                            <label class="focus-label">Amount</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-12">
                                        <input type="submit" value="Transfer" class="btn btn-success btn-block"/>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->

</div>
@endsection
