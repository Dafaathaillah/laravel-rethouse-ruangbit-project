@section('navbar-admin')
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
				<a class="nav-link dropdown-toggle" id="languageDropdown" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
					<i class="flag-icon flag-icon-id mt-1" title="ID"></i> <span
						class="font-weight-medium ml-1 mr-1 d-none d-md-inline-block">Indonesia</span>
				</a>
			</li>
			<li class="nav-item dropdown nav-profile">
				<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown"
					aria-haspopup="true" aria-expanded="false">
					<img src="images\pic_sample.jpg" alt="profile">
				</a>
				<div class="dropdown-menu" aria-labelledby="profileDropdown">
					<div class="dropdown-header d-flex flex-column align-items-center">
						<div class="figure mb-3">
							<img src="images\pic_sample.jpg" alt="">
						</div>
						<div class="info text-center">
							<p class="name font-weight-bold mb-0">Warrent Buffet</p>
							<p class="email text-muted mb-3">investasimasadepan69@gmail.com</p>
						</div>
					</div>
					<div class="dropdown-body">
						<ul class="profile-nav p-0 pt-3">
							<li class="nav-item">
								<a href="#" class="nav-link">
									<i data-feather="log-out"></i>
									<span>Log Out</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
	</div>
</nav>
@show