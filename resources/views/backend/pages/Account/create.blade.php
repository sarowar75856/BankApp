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
                    <h3 class="page-title">Account Create</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Account Create</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('account.create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 @error('name') error @enderror">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">

                                        @error('name')
                                            <p class="error-message">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6 @error('nid_number') error @enderror">
                                    <div class="form-group">
                                        <label>NId Number</label>
                                        <input class="form-control" type="number" name="nid_number" value="{{ old('number') }}">

                                        @error('nid_number')
                                            <p class="error-message">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 @error('mobile') error @enderror">
                                    <div class="form-group">
                                        <label> Mobile </label>
                                        <input class="form-control" type="tel" name="mobile" value="{{ old('mobile') }}">

                                        @error('mobile')
                                            <p class="error-message">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6 @error('balance') error @enderror">
                                    <div class="form-group">
                                        <label> Account </label>
                                        <input class="form-control" type="number" name="balance" value="{{ old('balance') }}">

                                        @error('balance')
                                            <p class="error-message">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
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
