@extends('dizayn.app')

@section('title')
  CATEGORY
@endsection

@section('category')


@isset($catEdit_id)
<div class="main-container">
   <div class="pd-ltr-20 xs-pd-20-10">
      <div class="min-height-200px">
         <div class="pd-20 card-box mb-30">
            <div class="clearfix">
               <div class="pull-left">
                  <h4 class="text-blue h4">Kategoriya Edit</h4>
               </div>
            </div>
            <form method="post" action="{{route('routeCatUpdate')}}">
               @csrf
               <div class="form-group row">
                  <label class="col-sm-12 col-md-2 col-form-label">Kategoriya:</label>
                  <div class="col-sm-12 col-md-10">
                     <input type="hidden" name="id" value="{{$catEdit_id->id}}">
                     <input type="text" class="form-control" name="categoryname" value="{{$catEdit_id->categoryname}}">
                  </div>
                  <div class="col-sm-12 col-md-10">
                     <button class="btn btn-primary" type="submit" title="Yenilə"><span class="icon-copy ti-reload"></span></button>
                     <a href="{{route('categoriya')}}"><button type="button" class="btn btn-danger" title="Imtina"><span class="icon-copy ti-close"></span></button></a>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endisset


@empty($catEdit_id)
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
         
         @isset($catDelete_id)
         <div class="alert alert-danger text-center" role="alert">
            Kategoriyanı silməyə əminsizmi?<br>
         </div>
         <div class="alert text-center">
            <a href="{{route('catDelOkey', $catDelete_id)}}"><button class="btn btn-success" title="Hə"><span class="icon-copy ti-check"></span></button></a>
            <a href="{{route('categoriya')}}"><button class="btn btn-danger" title="Yox"><span class="icon-copy ti-close"></span></button></a>
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
                  <h4 class="text-blue h4">Kategoriya</h4>
               </div>
            </div>
            <form method="post" action="{{route('routeCat')}}">
               @csrf
               <div class="form-group row">
                  <label class="col-sm-12 col-md-2 col-form-label">Kategoriya:</label>
                  <div class="col-sm-12 col-md-10">
                     <input type="text" class="form-control" name="categoryname" placeholder="Kategoriyanı daxil edin">
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
               <h4 class="text-blue h4">Kategoriya Cədvəli/ {{$catNumber}} qeyd var!</h4>
            </div>
            <div class="pb-20">
               <table class="table stripe hover multiple-select-row data-table-export nowrap">
                  <thead>
                     <tr>
                        <th>№</th>
                        <th>Kategoriya</th>
                        <th>Tarix</th>
                        <th><a href="{{route('profilee')}}"><button class="btn btn-warning" title="Geriyə"><span class="icon-copy ti-new-window"></span></button></a></th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                  @foreach($catData as $i=>$cat)
                     <tr>
                        <td>#{{$i+=1}}</td>
                        <td>{{$cat->categoryname}}</td>
                        <td>{{$cat->created_at}}</td>
                        <td><a href="{{route('catDelete', $cat->id)}}"><button class="btn btn-danger" title="Sil"><span class="icon-copy ti-eraser"></span></button></a></td>
                        <td><a href="{{route('catEdit', $cat->id)}}"><button class="btn btn-success" title="Redaktə"><span class="icon-copy ti-pencil-alt"></span></button></a></td>
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