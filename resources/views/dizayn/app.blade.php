<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>@yield('title')</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="{{url('vendors/images/apple-touch-icon.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{url('vendors/images/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{url('vendors/images/favicon-16x16.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{url('vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('src/plugins/datatables/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('vendors/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
						@if(Auth::user()->image)
							<img style="height:60px; width:60px;" src="{{url(Auth::user()->image)}}" alt="">
								@else
							<img src="{{url('https://www.clipartkey.com/mpngs/m/208-2089363_user-profile-image-png.png')}}" alt="">
						@endif
						</span>
						<span class="user-name">{{Auth::user()->username}}</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="{{route('profilee')}}"><i class="dw dw-user1"></i>Profil</a>
						<a class="dropdown-item" href="{{route('logout')}}"><i class="dw dw-logout"></i>Çıxış</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<a href="" target="_blank"><img src="{{url('vendors/images/github.svg')}}" alt=""></a>
			</div>
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Dizayn parametrləri
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Yuxarı arxa plan</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">Ağ</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Qara</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Yan arxa plan</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">Ağ</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Qara</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menyu aşağı açılan ikonası</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menyu siyahısı ikonası</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Parametrləri sıfırla</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="{{route('indeks')}}">
				<img src="{{url('vendors/images/deskapp-logo.svg')}}" alt="" class="dark-logo">
				<img src="{{url('vendors/images/deskapp-logo-white.svg')}}" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Bölüm 1</span>
						</a>
						<ul class="submenu">
							<li><a href="{{route('hall11')}}">Zal 1</a></li>
							<li><a href="{{route('table11')}}">Masa 1</a></li>
                            <li><a href="{{route('table22')}}">Masa 2</a></li>
							<li><a href="{{route('table33')}}">Masa 3</a></li>
							<li><a href="{{route('table44')}}">Masa 4</a></li>
							<li><a href="{{route('table55')}}">Masa 5</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Bölüm 2</span>
						</a>
						<ul class="submenu">
							<li><a href="{{route('hall22')}}">Zal 2</a></li>
							<li><a href="{{route('table66')}}">Masa 1</a></li>
                            <li><a href="{{route('table77')}}">Masa 2</a></li>
							<li><a href="{{route('table88')}}">Masa 3</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Bölüm 3</span>
						</a>
						<ul class="submenu">
							<li><a href="{{route('indeks')}}">Ana səhifə</a></li>
							<li><a href="{{route('cabinet11')}}">Kabinet 1</a></li>
                            <li><a href="{{route('cabinet22')}}">Kabinet 2</a></li>
						</ul>
					</li>


					<li>
						<div class="dropdown-divider"></div>
					</li>
					
					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Digər səhifələr</span>
						</a>
						<ul class="submenu">
							<li><a href="{{route('profilee')}}">Profil</a></li>
							<li><a href="{{route('logout')}}">Çıxış</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>
		
		@yield('profile')
        @yield('category')
        @yield('foodsystem')
		@yield('index')
		@yield('hall1')
		@yield('hall2')
        @yield('table1')
		@yield('table2')
		@yield('table3')
		@yield('table4')
		@yield('table5')
		@yield('table6')
		@yield('table7')
		@yield('table8')
		@yield('cabinet1')
		@yield('cabinet2')

	<!-- js -->
	<script src="{{url('vendors/scripts/core.js')}}"></script>
	<script src="{{url('vendors/scripts/script.min.js')}}"></script>
	<script src="{{url('vendors/scripts/process.js')}}"></script>
	<script src="{{url('vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{url('src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{url('src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{url('src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{url('src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
	<!-- buttons for Export datatable -->
	<script src="{{url('src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{url('src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{url('src/plugins/datatables/js/buttons.print.min.js')}}"></script>
	<script src="{{url('src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
	<script src="{{url('src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
	<script src="{{url('src/plugins/datatables/js/pdfmake.min.js')}}"></script>
	<script src="{{url('src/plugins/datatables/js/vfs_fonts.js')}}"></script>
	<!-- Datatable Setting js -->
	<script src="{{url('vendors/scripts/datatable-setting.js')}}"></script></body>
</html>