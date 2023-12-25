<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\categoryRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\category;
use App\Models\foodsystem;

class categoryController extends Controller
{
    public function catInsert(categoryRequest $post)
    {
      $modelCategory = new category();

      $check = $modelCategory->where('categoryname','=', $post->categoryname)
      ->where('user_id','=', Auth::id())
      ->count();
        
      if($check==0)
        {
          $modelCategory->user_id = Auth::id();
          $modelCategory->categoryname = $post->categoryname;

          $modelCategory->save();

          return redirect()->route('categoriya')->with('messages1', 'Kategoriya uğurla bazaya ələvə olundu!');
        }

     return redirect()->route('categoriya')->with('messages2', 'Bu kategoriya artıq ələvə olunub!');

    }



    public function catList()
    {
      $catNumber = category::where('user_id','=', Auth::id())->count();

      return view('category', [
        'catData'=>category::where('user_id','=', Auth::id())
        ->orderBy('id','desc')
        ->get(),

        'catNumber'=>$catNumber
      ]);
    }



    public function catDelete($id)
    {
      $catNumber = category::where('user_id','=', Auth::id())->count();

      return view('category', [
        'catData'=>category::where('user_id','=', Auth::id())
        ->orderBy('id','desc')
        ->get(),
        
        'catNumber'=>$catNumber,

        'catDelete_id'=>$id
      ]);
    }



    public function catDelOkey($id)
    {
      $check = foodsystem::where('category_id','=',$id)->count();

      if($check==0)
        {
          $modelCategory = category::find($id)->delete();

          return redirect()->route('categoriya')->with('messages1', 'Kategoriya uğurla bazadan silindi!');
        }
        return redirect()->route('categoriya')->with('messages2', 'Bu kategoriya yemək sistemində(foodsystem) aktiv qiymətə malik olduğu üçün silinmədi!');
    }



    public function catEdit($id)
    {
      $catNumber = category::where('user_id','=', Auth::id())->count();

      return view('category', [
        'catData'=>category::where('user_id','=', Auth::id())
        ->orderBy('id','desc')
        ->get(),
        
        'catNumber'=>$catNumber,

        'catEdit_id'=>category::find($id)
      ]);
    }



    public function catUpdate(categoryRequest $post)
    {
      $modelCategory = category::find($post->id);

      $modelCategory->categoryname = $post->categoryname;

      $modelCategory->save();

      return redirect()->route('categoriya')->with('messages1', 'Kategoriya uğurla yeniləndi!');
    }
}
