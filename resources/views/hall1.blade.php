@extends('dizayn.app')

@section('title')
    HALL1
@endsection

@section('hall1')

	
	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							<b>Zal 1</b> <div class="weight-600 font-30 text-blue">{{Auth::user()->username}}</div>
						</h4>
						<p class="font-18 max-width-600">Aşağıdakı masalara daxil olaraq sifarışləri qəbul edə və ya 
                            <b>Geriyə</b> düyməsini basaraq başladığınız yerə(<b>Zal 1</b>) qayıda bilərsiniz.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-2 mb-30">
					<div class="card-box height-50-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
                                <div class="h4 mb-0" title="Buradan keçə bilərsiz"><a href="{{route('table11')}}">Masa 1</a></div>
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
                                <div class="h4 mb-0" title="Buradan keçə bilərsiz"><a href="{{route('table22')}}">Masa 2</a></div>
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
                                <div class="h4 mb-0" title="Buradan keçə bilərsiz"><a href="{{route('table33')}}">Masa 3</a></div>
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
                                <div class="h4 mb-0" title="Buradan keçə bilərsiz"><a href="{{route('table44')}}">Masa 4</a></div>
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
                                <div class="h4 mb-0" title="Buradan keçə bilərsiz"><a href="{{route('table55')}}">Masa 5</a></div>
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


@endsection