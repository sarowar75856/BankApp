<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>@yield('title')</title>

		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">

		<!-- Chart CSS -->
		<link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!-- Datatable CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">

		<!-- HTML5 shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
			<script src="{{ asset('assets/js/respond.min.js') }}"></script>
		<![endif]-->
    </head>

    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
            @include('backend.layouts.partials.header')
			<!-- /Header -->

			<!-- Sidebar -->
            @include('backend.layouts.partials.sidebar')
			<!-- /Sidebar -->

			<!-- Page Wrapper -->
            @yield('content')
			<!-- /Page Wrapper -->

        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>

		<!-- Bootstrap Core JS -->
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

		<!-- Slimscroll JS -->
		<script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

		<!-- Chart JS -->
		<script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
		<script src="{{ asset('assets/js/chart.js') }}"></script>

        <!-- Datatable JS -->
		<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>

		<!-- Custom JS -->
		<script src="{{ asset('assets/js/app.js') }}"></script>



    </body>
</html>
