@extends('dizayn.app')

@section('title')
  TABLE6
@endsection

@section('table6')


@isset($catEdit)
  <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Zal 2/ Masa 1/{{$catEdit->categoryname}}</h4>
					</div>
					<div class="pb-20">
						<table class="table stripe hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th>№</th>
									<th>Yemək</th>
									<th>Qiymət</th>
									<th>Əlavə et</th>
									<th><a href="{{route('table66')}}"><button class="btn btn-warning" title="Geriyə"><span class="icon-copy ti-new-window"></span></button></a></th>
								</tr>
							</thead>
							<tbody>
              					@foreach($foodEdit as $i=>$food)
								<tr>
									<td>#{{$i+=1}}</td>
									<td>{{$food->foodname}}</td>
									<td>{{$food->price}} Azn</td>
									<td><a href="{{route('t6Insert', $food->id)}}"><button class="btn btn-primary" title="Əlavə et"><span class="icon-copy ti-pencil"></span></button></a></td>
									<td>{{$food->created_at}}</td>
								</tr>
             					 @endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endisset



@empty($catEdit)
  <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
			@isset($table6Order)
			<div class="alert alert-danger text-center" role="alert">
				Yekun hesab: <b>{{$totalScore}} Azn</b><br>
				Hesabı bağlamağa əminsizmi?<br>
			</div>
			<div class="alert text-center">
				<a href="{{route('t6Clear2')}}"><button class="btn btn-success" title="Hə"><span class="icon-copy ti-check"></span></button></a>
				<a href="{{route('table66')}}"><button class="btn btn-danger" title="Yox"><span class="icon-copy ti-close"></span></button></a>
			</div>
			@endisset


			@isset($t6Del_id)
			<div class="alert alert-danger text-center" role="alert">
				Sifarişi silməyə əminsizmi?<br>
			</div>
			<div class="alert text-center">
				<a href="{{route('t6DelOkey', $t6Del_id)}}"><button class="btn btn-success" title="Hə"><span class="icon-copy ti-check"></span></button></a>
				<a href="{{route('table66')}}"><button class="btn btn-danger" title="Yox"><span class="icon-copy ti-close"></span></button></a>
			</div>
			@endisset


			@if(session('messages1'))
			<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
				<strong>{{session('messages1')}}</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div><br><br>
			@endif
			
			
			@if(session('messages2'))
			<div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
				<strong>{{session('messages2')}}</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div><br><br>
			@endif

				<!-- Export Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Zal 2/ Masa 1/ Kategoriya</h4>
					</div>
					<div class="pb-20">
						<table class="table stripe hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th>№</th>
									<th>Kategoriya</th>
									<th>Daxil ol</th>
									<th><a href="{{route('hall22')}}"><button class="btn btn-warning" title="Geriyə"><span class="icon-copy ti-new-window"></span></button></a></th>
								</tr>
							</thead>
							<tbody>
              					@foreach($catData as $i=>$cat)
								<tr>
									<td>#{{$i+=1}}</td>
									<td>{{$cat->categoryname}}</td>
									<td><a href="{{route('t6ShowCat', $cat->id)}}"><button class="btn btn-primary" title="Daxil ol"><span class="icon-copy ti-direction"></span></button></a></td>
									<td>{{$cat->created_at}}</td>
								</tr>
                				@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endempty



  <div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Zal 2/ Masa 1/ {{$t6Number}} sifariş var!</h4>
					</div>
					<div class="pb-20">
						<table class="table stripe hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th>№</th>
									<th>Sifariş</th>
									<th>Qiymət</th>
									<th><a href="{{route('t6Clear')}}"><button class="btn btn-success" title="Hesabı bağla"><span class="icon-copy ti-receipt"></span></button></a></th>
									<th>Ümumi hesab: {{$totalScore}} Azn</th>
								</tr>
							</thead>
							<tbody>
                				@foreach($table6Data as $i=>$t6Data)
								<tr>
									<td>#{{$i+=1}}</td>
									<td>{{$t6Data->foodname}}</td>
									<td>{{$t6Data->price}} Azn</td>
									<td><a href="{{route('t6Del', $t6Data->id)}}"><button class="btn btn-danger" title="Ləğv et"><span class="icon-copy ti-eraser"></span></button></a></td>
									<td>{{$t6Data->created_at}}</td>
								</tr>
                				@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection