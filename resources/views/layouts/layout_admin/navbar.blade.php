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

<body>
	<nav class="navbar">
		<a href="#" class="sidebar-toggler">
			<i data-feather="menu"></i>
		</a>
		<div class="navbar-content">
			<!-- <form class="search-form">
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i data-feather="search"></i>
						</div>
					</div>
					<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
				</div>
			</form> -->
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="languageDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="flag-icon flag-icon-id mt-1" title="ID"></i> <span
							class="font-weight-medium ml-1 mr-1 d-none d-md-inline-block">Indonesia</span>
					</a>
				</li>
				@auth
				<li class="nav-item dropdown nav-profile">
					<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="{{ asset('images\pic_sample.jpg') }}" alt="profile">
					</a>
					<div class="dropdown-menu" aria-labelledby="profileDropdown">
						<div class="dropdown-header d-flex flex-column align-items-center">
							<div class="figure mb-3">
								<img src="{{ asset('images\pic_sample.jpg') }}" alt="">
							</div>
							<div class="info text-center">
								<p class="name font-weight-bold mb-0">Welcome, {{ auth()->user()->name }}</p>
								<p class="email text-muted mb-3">{{ auth()->user()->email }}</p>
							</div>
						</div>
						<div class="dropdown-body">
							<ul class="profile-nav p-0 pt-3">
								<li class="nav-item">
									<form action="{{ route('auth.logout') }}" action="post">
										@csrf
										<button type="submit" class="dropdown-item">Log Out</button>
									</form>									
								</li>
							</ul>
						</div>
					</div>
				</li>
				@else
				<li class="nav-item dropdown nav-profile">
					<a href="{{ route('auth.login')}}" title="">Login</a> / <a href="{{ route('auth.register')}}" title="">Register</a>
				</li>				
				@endauth
				
			</ul>
		</div>
	</nav>

</body>
