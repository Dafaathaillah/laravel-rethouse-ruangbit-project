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
	<nav class="sidebar">
		<div class="sidebar-header">
			<a href="#" class="sidebar-brand">
				Admin<span>property</span>
			</a>
			<div class="sidebar-toggler not-active">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div class="sidebar-body">
			<ul class="nav">
				<li class="nav-item nav-category">SIDEBAR - MENU</li>
				<li class="nav-item">
					<a href=" {{ route('admin.dashboard.index')}} " class="nav-link">
						<i class="link-icon" data-feather="box"></i>
						<span class="link-title">Dashboard</span>
					</a>
				</li>
				<li class="nav-item">
					<a href=" {{ route('admin.user.index')}} " class="nav-link">
						<i class="link-icon" data-feather="users"></i>
						<span class="link-title">Manage User</span>
					</a>
				</li>
				<li class="nav-item">
					<a href=" {{ route('admin.role.index')}} " class="nav-link">
						<i class="link-icon" data-feather="user-check"></i>
						<span class="link-title">Manage Role</span>
					</a>
				</li>
				<li class="nav-item">
					<a href=" {{ route('admin.agency.index')}} " class="nav-link">
						<i class="link-icon" data-feather="book"></i>
						<span class="link-title">Manage Agency</span>
					</a>
				</li>
				<li class="nav-item">
					<a href=" {{ route('admin.ads.index')}} " class="nav-link">
						<i class="link-icon" data-feather="minus-square"></i>
						<span class="link-title">Manage Ads</span>
					</a>
				</li>
				<li class="nav-item">
					<a href=" {{ route('admin.term.index')}} " class="nav-link">
						<i class="link-icon" data-feather="edit-3"></i>
						<span class="link-title">Manage T&C</span>
					</a>
				</li>
				<li class="nav-item">
					<a href=" {{ route('logo.index')}} " class="nav-link">
						<i class="link-icon" data-feather="image"></i>
						<span class="link-title">Manage Logo</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>
	{{-- <nav class="settings-sidebar">
		<div class="sidebar-body">
			<a href="#" class="settings-sidebar-toggler">
				<i data-feather="settings"></i>
			</a>
			<div class="theme-wrapper">
				<h6 class="text-muted mb-2">Mohon Maaf Fitur Masih Dalam Tahap Pengembangan!</h6>
			</div>
		</div>
	</nav> --}}

</body>
