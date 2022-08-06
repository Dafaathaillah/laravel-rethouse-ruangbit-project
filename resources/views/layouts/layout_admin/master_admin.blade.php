<!DOCTYPE html>
<!--
Template Name: NobleUI - Admin & Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: You must have a valid license purchased only from above link or https://themeforest.net/user/nobleui/portfolio/ in order to legally use the theme for your project.
-->
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Rethouse - Real Estate @yield('title')</title>
	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('assets/assets/core/core.css') }}">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<link rel="stylesheet" href="{{ asset('assets/assets/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets/flag-icon-css/css/flag-icon.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/assets/datatables.net-bs4/dataTables.bootstrap4.css') }}">
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		@include('layouts\layout_admin\sidebar')
		<!-- partial -->

		<div class="page-wrapper">

			<!-- partial:partials/_navbar.html -->
			@include('layouts\layout_admin\navbar')
			<!-- partial -->

			<div class="page-content">

				<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
					<div>
						<h4 class="mb-3 mb-md-0">Hi ADMIN!</h4>
					</div>
					<div class="d-flex align-items-center flex-wrap text-nowrap">
						<div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex"
							id="dashboardDate">
							<span class="input-group-addon bg-transparent"><i data-feather="calendar"
									class=" text-primary"></i></span>
							<input type="text" class="form-control">
						</div>
						<button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
							<i class="btn-icon-prepend" data-feather="download-cloud"></i>
							Download Report
						</button>
					</div>
				</div>
				<div class="container">
					<div class="card">
						<div class="card-body">
							@yield('content')
						</div>
					</div>
				</div>
			</div>

			<!-- partial:partials/_footer.html -->
			@include('layouts\layout_admin\footer')
			<!-- partial -->

		</div>
	</div>

	<!-- core:js -->
	<script src="{{ asset('assets/assets/core/core.js') }}"></script>
	<!-- endinject -->
	<!-- plugin js for this page -->
	<script src="{{ asset('assets/assets/chartjs/Chart.min.js') }}"></script>
	<script src="{{ asset('assets/assets/jquery.flot/jquery.flot.js') }}"></script>
	<script src="{{ asset('assets/assets/jquery.flot/jquery.flot.resize.js') }}"></script>
	<script src="{{ asset('assets/assets/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('assets/assets/apexcharts/apexcharts.min.js') }}"></script>
	<script src="{{ asset('assets/assets/progressbar.js/progressbar.min.js') }}"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="{{ asset('assets/assets/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('assets/js/template.js') }}"></script>
	<!-- endinject -->
	<!-- custom js for this page -->
	<script src="{{ asset('assets/js/dashboard.js') }}"></script>
	<script src="{{ asset('assets/js/datepicker.js') }}"></script>
	<!-- end custom js for this page -->
	<script src="{{ asset('assets/assets/datatables.net/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('assets/assets/datatables.net-bs4/dataTables.bootstrap4.js') }}">
		<script>
	<script src="{{ asset('assets/js/data-table.js') }}">
	</script>
</body>

</html>