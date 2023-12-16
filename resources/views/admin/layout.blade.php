<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon icon-->
		<link href="{{asset('admin/fonts/feather/feather.css')}}" rel="stylesheet" />
		<link href="{{asset('admin/libs/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet" />
		<link href="{{asset('admin/libs/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('admin/libs/simplebar/dist/simplebar.min.css')}}">
		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('admin/css/theme.min.css')}}">
        <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
		<title>@yield('title')</title>
	</head>
	<body>
		<!-- Wrapper -->
		<div id="db-wrapper">
			<!-- navbar vertical -->
			<!-- Sidebar -->
			@include('admin.slide-bar')
			<main id="page-content">
				<div class="header">
					<!-- navbar -->
					<nav class="navbar-default navbar navbar-expand-lg">
						<a id="nav-toggle" href="#"><i class="fe fe-menu"></i></a>
						<!--Navbar nav -->
						<div class="ms-auto d-flex">
							<a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle ">
								<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
								<label class="form-check-label" for="flexSwitchCheckDefault"></label>
							</a>
							<ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">
								<li class="dropdown stopevent">
									<a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted" href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-bell"></i></a>
									<div class="dropdown-menu dropdown-menu-end dropdown-menu-lg" aria-labelledby="dropdownNotification">
										<div></div>
									</div>
								</li>
								<!-- List -->
								<li class="dropdown ms-2">
									<a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
										<div class="avatar avatar-md avatar-indicators avatar-online">
											<img alt="avatar" src="{{asset('images/logocarrierepro.jpg')}}" class="rounded-circle" >
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
										<div class="dropdown-item">
											<div class="d-flex">
												<div class="avatar avatar-md avatar-indicators avatar-online">
													<img alt="avatar" src="{{asset('images/logocarrierepro.jpg')}}" class="rounded-circle" >
												</div>
												<div class="ms-3 lh-1">
													<h5 class="mb-1">
														{{Auth::user()->name}}
													</h5>
													<p class="mb-0 text-muted">
														{{Auth::user()->email}}
													</p>
												</div>
											</div>
										</div>
										<div class="dropdown-divider"></div>
										<ul class="list-unstyled">
											<li>
												<a class="dropdown-item" href="#"><i class="fe fe-power me-2"></i>Se Deconnecter</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- Page Header -->
				<!-- Container fluid -->
				@yield('admin')
			</main>
		</div>
		<!-- Script -->
		<!-- Page Content -->
		<!-- Libs JS -->
		<script src="{{asset('admin/libs/jquery/dist/jquery.min.js')}}"></script>
		<script src="{{asset('admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('admin/libs/simplebar/dist/simplebar.min.js')}}"></script>
		<!-- Theme JS -->
		<script src="{{asset('admin/js/theme.min.js')}}"></script>
		<script src="{{asset('admin/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
		<script src="{{asset('admin/js/vendors/flatpickr.js')}}"></script>

        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>

	</body>
</html>

