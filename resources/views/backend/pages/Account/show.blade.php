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
                    <h3 class="page-title">Accounts</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Accounts</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{ route('account.create')}}" class="btn add-btn"><i class="fa fa-plus"></i> Add Account</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Account Id</th>
                                <th>Customer Name</th>
                                <th>NID Number</th>
                                <th>Mobile</th>
                                <th>Created Date</th>
                                <th>Balance</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $key => $account )
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td><a href="">{{ $account->account_id }}</a></td>
                                <td>{{ $account->name }}</td>
                                <td>{{ $account->nid_number }}</td>
                                <td>{{ $account->mobile }}</td>
                                <td>{{ $account->created_at }}</td>
                                <td>{{ $account->balance }}</td>

                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_ticket"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->

    <!-- Add Modal -->
    <div id="add_ticket" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post"  action="{{ route('account.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>NId Number</label>
                                    <input class="form-control" type="number" name="nid_number">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label> Mobile </label>
                                    <input class="form-control" type="tel" name="mobile">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label> Account </label>
                                    <input class="form-control" type="number" name="balance">
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
    <!-- /Add Modal -->

</div>
@endsection
