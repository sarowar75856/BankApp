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
                    <h3 class="page-title"> Search Transfer History </h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Search Transfer History</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('account.history') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="row filter-row">
                                    <div class="col-sm-6 col-md-8 col-lg-8 col-xl-8 col-12 @error('account_id') error @enderror"">
                                        <div class="form-group form-focus">
                                            <input type="text" name="account_id" class="form-control floating">
                                            <label class="focus-label">Account Number</label>

                                            @error('account_id')
                                            <p class="error-message">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 col-12">
                                        <input type="submit"  value="Search" class="btn btn-success btn-block" />
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
