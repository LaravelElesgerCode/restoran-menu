@extends('dizayn.app')

@section('title')
    INDEX
@endsection

@section('index')

	
	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Xoş gəldin! <div class="weight-600 font-30 text-blue">{{Auth::user()->username}}</div>
						</h4>
						<p class="font-18 max-width-600">Bu layihənin qurulmasında əsas fikir, məqsəd odur ki burada öz menyunuzu
                            yaradıb onu istifadə edə biləsiniz. Öz menyunuzu yaratmaq üçün Profil (<b>Digər səhifələr</b> bölməsindən 
                            və ya sağ yuxarıdan daxil ola bilərsiniz.) bölməsinə daxil olub oradaki göstərişləri yerinə yetirməniz kifayətdir.
                            Ayrıca, sol tərəfdəki və aşağıdakı <b>keçid panellərindən</b> istifadə edə bilərsiniz.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-2 mb-30">
					<div class="card-box height-50-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
                                <div class="h4 mb-0" title="Buradan keçə bilərsiz"><a href="{{route('hall11')}}">Zal 1</a></div>
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
                                <div class="h4 mb-0" title="Buradan keçə bilərsiz"><a href="{{route('hall22')}}">Zal 2</a></div>
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
                                <div class="h4 mb-0" title="Buradan keçə bilərsiz"><a href="{{route('cabinet11')}}">Kabinet 1</a></div>
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
                                <div class="h4 mb-0" title="Buradan keçə bilərsiz"><a href="{{route('cabinet22')}}">Kabinet 2</a></div>
							</div>
							<div class="widget-data">
								<div class="h2 mb-0">
                                    <i class="icon-copy dw dw-cocktail-1"></i>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>


@endsection