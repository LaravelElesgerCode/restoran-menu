@extends('dizayn.app')

@section('title')
	PROFILE
@endsection

@section('profile')

<div class="main-container">
	<div class="pd-ltr-20">
		@if($errors->any())
			@foreach($errors->all() as $error) 
			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
				<strong>{{$error}}</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			@endforeach
		@endif
		<br><br>

		@if(session('messages1'))
		<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
			<strong>{{session('messages1')}}</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div><br><br>
		@endif
		@if(session('messages2'))
		<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
			<strong>{{session('messages2')}}</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div><br><br>
		@endif
		
		<div class="card-box pd-20 height-100-p mb-30">
			<div class="row align-items-center">
				<div class="col-md-4">
					<img src="vendors/images/banner-img.png" alt="">
				</div>
				<div class="col-md-8">
					<h4 class="font-20 weight-500 mb-10 text-capitalize">
						<div class="weight-600 font-30 text-blue">{{Auth::user()->username}}</div>
					</h4>
					<p class="font-18 max-width-600">Aşağıdakı  <b>"Kategori"</b> və <b>"Yemək sistemi"</b> səhifələrindən öz menyunuzu
						yarada bilərsiniz. Beləliklə <b>"Masa(-lar)"</b> -da sizin yaratdığınız menyular mövcud olacaqdır.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-2 mb-30">
				<div class="card-box height-50-p widget-style1">
					<div class="d-flex flex-wrap align-items-center">
						<div class="progress-data">
							<div class="h5 mb-0" title="Buradan keçə bilərsiz"><a href="{{route('categoriya')}}">Kategoriya</a></div>
						</div>
						<div class="widget-data">
							<div class="h2 mb-0">
								<i class="icon-copy dw dw-cocktail-1"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 mb-30">
				<div class="card-box height-50-p widget-style1">
					<div class="d-flex flex-wrap align-items-center">
						<div class="progress-data">
							<div class="h5 mb-0" title="Buradan keçə bilərsiz"><a href="{{route('food')}}">Yemək sistemi</a></div>
						</div>
						<div class="widget-data">
							<div class="h2 mb-0">
								<i class="icon-copy dw dw-cocktail-1"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 mb-30">
				<div class="card-box height-50-p widget-style1">
					<div class="d-flex flex-wrap align-items-center">
						<div class="progress-data">
							<div class="h4 mb-0" title="Buradan keçə bilərsiz"><a href="{{route('indeks')}}">Geriyə</a></div>
						</div>
						<div class="widget-data">
							<div class="h2 mb-0">
								<span class="icon-copy ti-arrow-left"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="row">
				<div class="col-xl-12 col-lg-4 col-md-4 col-sm-12 mb-30">
					<form method="post" action="{{route('profRoute')}}" enctype="multipart/form-data">
					@csrf
					<div class="pd-20 card-box height-100-p">
						<div class="profile-photo text-center">
							<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
							@if(Auth::user()->image)
								<img style="height:130px; width:130px;" src="{{url(Auth::user()->image)}}" alt="" class="avatar-photo">
									@else
								<img id="image" src="{{url('https://www.clipartkey.com/mpngs/m/208-2089363_user-profile-image-png.png')}}" alt="" class="avatar-photo">
							@endif<br><br>
							<h5 class="text-center h5 mb-0">{{Auth::user()->username}}</h5>
							<p class="text-center text-muted font-14">İstifadəçi adı</p>
							<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-body pd-5">
											<div class="img-container text-center">
												@if(Auth::user()->image)
													<img src="{{url(Auth::user()->image)}}" alt="" class="avatar-photo">
													@else
													<img id="image" src="{{url('https://www.clipartkey.com/mpngs/m/208-2089363_user-profile-image-png.png')}}" alt="Picture">
												@endif
											</div>
										</div>
										<div class="modal-footer">
											<input type="hidden" name="current_image" value="{{Auth::user()->image}}">
											<input type="file" name="image">
											<button type="button" class="btn btn-primary" data-dismiss="modal">Geriyə</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br><br><br><br>
					
						<div class="profile-info">
							<ul>
								<div class="form-group">
									<label>Ad/soyad:</label>
									<input type="text" class="form-control form-control-lg" name="username" value="{{Auth::user()->username}}">
								</div>
								<div class="form-group">
									<label>Email:</label>
									<input type="email" class="form-control form-control-lg" name="email" value="{{Auth::user()->email}}">
								</div>
								<div class="form-group">
									<label>Cari parol:</label>
									<input type="password" name="current_password" class="form-control form-control-lg" placeholder="Cari parolunuzu daxil edin">
								</div>
								<div class="form-group">
									<label>Yeni parol:</label>
									<input type="password" name="new_password" class="form-control form-control-lg" placeholder="Yeni parolunuzu daxil edin">
								</div>
								<div class="form-group">
									<label>Təkrar parol:</label>
									<input type="password" name="repaet_password" class="form-control form-control-lg" placeholder="Təkrar parolunuzu daxil edin"><br>
									<button class="btn btn-primary" type="submit" title="Yenilə"><span class="icon-copy ti-reload"></span></button>
								</div>
							</ul>
						</div>
						
						<div class="profile-skills">
							<h5 class="mb-20 h5 text-blue">Bacarıqlar</h5>
							<h6 class="mb-5 font-14">Laravel</h6>
							<div class="progress mb-20" style="height: 6px;">
								<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<h6 class="mb-5 font-14">PHP</h6>
							<div class="progress mb-20" style="height: 6px;">
								<div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<h6 class="mb-5 font-14">MySql</h6>
							<div class="progress mb-20" style="height: 6px;">
								<div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<h6 class="mb-5 font-14">Bootstrap</h6>
							<div class="progress mb-20" style="height: 6px;">
								<div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<h6 class="mb-5 font-14">Css</h6>
							<div class="progress mb-20" style="height: 6px;">
								<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection

	