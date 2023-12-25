@extends('dizayn.app')

@section('title')
  FOODSYSTEM
@endsection


@section('foodsystem')


@isset($foodEdit_id)
<div class="main-container">
   <div class="pd-ltr-20 xs-pd-20-10">
      <div class="min-height-200px">
         <div class="pd-20 card-box mb-30">
            <div class="clearfix">
               <div class="pull-left">
                  <h4 class="text-blue h4">Yemək Sistemi</h4>
               </div>
            </div>
            <form method="post" action="{{route('routeFoodUpdate')}}">
               @csrf
               <div class="form-group row">
                  <label class="col-sm-12 col-md-2 col-form-label">Kategoriya:</label>
                  <div class="col-sm-12 col-md-10">
                     <input type="hidden" name="id" value="{{$foodEdit_id->id}}">
                     <select class="form-control" name="category_id"><br>
                        <option value="">Kategoriyanı seçin:</option>
                        @foreach($catData as $cat)
                           @if($foodEdit_id->category_id==$cat->id)
                              <option selected value="{{$cat->id}}">{{$cat->categoryname}}</option>
                                 @else
                              <option value="{{$cat->id}}">{{$cat->categoryname}}</option>
                           @endif
                        @endforeach
                     </select><br>
                  </div>
                  <label class="col-sm-12 col-md-2 col-form-label">Yemək adı:</label>
                  <div class="col-sm-12 col-md-10">
                     <input type="text" class="form-control" name="foodname" value="{{$foodEdit_id->foodname}}"><br>
                  </div>
                  <label class="col-sm-12 col-md-2 col-form-label">Qiymət:</label>
                  <div class="col-sm-12 col-md-10">
                     <input type="text" class="form-control" name="price" value="{{$foodEdit_id->price}}">
                  </div>
                  <div class="col-sm-12 col-md-10">
                     <button class="btn btn-primary" type="submit" title="Yenilə"><span class="icon-copy ti-reload"></span></button>
                     <a href="{{route('food')}}"><button type="button" class="btn btn-danger" title="Imtina"><span class="icon-copy ti-close"></span></button></a>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endisset


@empty($foodEdit_id)
<div class="main-container">
   <div class="pd-ltr-20 xs-pd-20-10">
      <div class="min-height-200px">

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
         <br>

         @isset($foodDelete_id)
         <div class="alert alert-danger text-center" role="alert">
            Yemək qeydini silməyə əminsizmi?<br>
         </div>
         <div class="alert text-center">
            <a href="{{route('foodDelOkey', $foodDelete_id)}}"><button class="btn btn-success" title="Hə"><span class="icon-copy ti-check"></span></button></a>
            <a href="{{route('food')}}"><button class="btn btn-danger" title="Yox"><span class="icon-copy ti-close"></span></button></a>
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
			<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
				<strong>{{session('messages2')}}</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div><br><br>
			@endif

         <div class="pd-20 card-box mb-30">
            <div class="clearfix">
               <div class="pull-left">
                  <h4 class="text-blue h4">Yemək Sistemi</h4>
               </div>
            </div>
            <form method="post" action="{{route('routeFood')}}">
               @csrf
               <div class="form-group row">
                  <label class="col-sm-12 col-md-2 col-form-label">Kategoriya:</label>
                  <div class="col-sm-12 col-md-10">
                     <select class="form-control" name="category_id"><br>
                        <option value="">Kategoriyanı seçin:</option>
                        @foreach($catData as $cat)
                           <option value="{{$cat->id}}">{{$cat->categoryname}}</option>
                        @endforeach
                     </select><br>
                  </div>
                  <label class="col-sm-12 col-md-2 col-form-label">Yemək adı:</label>
                  <div class="col-sm-12 col-md-10">
                     <input type="text" class="form-control" name="foodname" placeholder="Yemək adını daxil edin"><br>
                  </div>
                  <label class="col-sm-12 col-md-2 col-form-label">Qiymət:</label>
                  <div class="col-sm-12 col-md-10">
                     <input type="text" class="form-control" name="price" placeholder="Qiyməti daxil edin">
                  </div>
                  <div class="col-sm-12 col-md-10">
                     <button class="btn btn-primary" type="submit" title="Daxil et"><span class="icon-copy ti-arrow-down"></span></button>
                  </div>
               </div>
            </form>
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
               <h4 class="text-blue h4">Yemək Cədvəli/ {{$foodNumber}} qeyd var!</h4>
            </div>
            <div class="pb-20">
               <table class="table stripe hover multiple-select-row data-table-export nowrap">
                  <thead>
                     <tr>
                        <th>№</th>
                        <th>Kategoriya</th>
                        <th>Yemək</th>
                        <th>Qiymət</th>
                        <th>Tarix</th>
                        <th><a href="{{route('profilee')}}"><button class="btn btn-warning" title="Geriyə"><span class="icon-copy ti-new-window"></span></button></a></th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                  @foreach($foodData as $i=>$food)
                     <tr>
                        <td>#{{$i+=1}}</td>
                        <td>{{$food->categoryname}}</td>
                        <td>{{$food->foodname}}</td>
                        <td>{{$food->price}} Azn</td>
                        <td>{{$food->created_at}}</td>
                        <td><a href="{{route('foodDelete', $food->id)}}"><button class="btn btn-danger" title="Sil"><span class="icon-copy ti-eraser"></span></button></a></td>
                        <td><a href="{{route('foodEdit', $food->id)}}"><button class="btn btn-success" title="Redaktə"><span class="icon-copy ti-pencil-alt"></span></button></a></td>
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