<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\foodRequest;
use Illuminate\Support\Facades\Auth;

use App\Models\foodsystem;
use App\Models\category;

class foodsystemController extends Controller
{
    public function foodInsert(foodRequest $post)
    {
      $modelFood = new foodsystem();
      
      $check = $modelFood->where('category_id', '=', $post->category_id)
      ->where('foodname', '=', $post->foodname)
      ->where('user_id','=', Auth::id())
      ->exists(); //<----1. Əgər sadəcə qeydin mövcud olub-olmadığını yoxlamaq istəyirsinizsə,
                  //onda exists() istifadə etmək olar.
                  //2. Bu yolla yalnız bir dəfə hər kategoriyaya bir yemək vermək olar. 

      if($check==0)
        {  
          $modelFood->user_id = Auth::id();
          $modelFood->category_id = $post->category_id;
          $modelFood->foodname = $post->foodname;
          $modelFood->price = $post->price;

          $modelFood->save();

          return redirect()->route('food')->with('messages1', 'Kategoriya,yemək adı və qiyməti uğurla bazaya ələvə olundu!');
        }
       
        return redirect()->route('food')->with('messages2', 'Bu qeyd artıq ələvə olunub!');
    }



    public function foodList()
    {
      $foodNumber = foodsystem::where('user_id','=', Auth::id())->count();

      return view('foodsystem', [
        'foodData'=>foodsystem::where('foodsystem.user_id','=', Auth::id())
        ->join('category','category.id','=','foodsystem.category_id')
        ->select('foodsystem.id','foodsystem.foodname','foodsystem.price','foodsystem.created_at','foodsystem.user_id','category.categoryname')
        ->orderBy('foodsystem.id','desc')
        ->get(),

        'catData'=>category::where('user_id','=', Auth::id())
        ->orderBy('categoryname','asc')->get(),

        'foodNumber'=>$foodNumber
      ]);
    }



    public function foodDelete($id)
    {
      $foodNumber = foodsystem::where('user_id','=', Auth::id())->count();

      return view('foodsystem', [
        'foodData'=>foodsystem::where('foodsystem.user_id','=', Auth::id())
        ->join('category','category.id','=','foodsystem.category_id')
        ->select('foodsystem.id','foodsystem.foodname','foodsystem.price','foodsystem.created_at','foodsystem.user_id','category.categoryname')
        ->orderBy('foodsystem.id','desc')
        ->get(),

        'catData'=>category::where('user_id','=', Auth::id())
        ->orderBy('categoryname','asc')->get(),
        
        'foodNumber'=>$foodNumber,

        'foodDelete_id'=>$id
      ]);
    }



    public function foodDelOkey($id)
    {
      $modelFood = foodsystem::find($id)->delete();

      return redirect()->route('food')->with('messages1', 'Yemək qeydi uğurla bazadan silindi!');
    }



    public function foodEdit($id)
    {
      $foodNumber = foodsystem::where('user_id','=', Auth::id())->count();

      return view('foodsystem', [
        'foodData'=>foodsystem::where('foodsystem.user_id','=', Auth::id())
        ->join('category','category.id','=','foodsystem.category_id')
        ->select('foodsystem.id','foodsystem.foodname','foodsystem.price','foodsystem.created_at','foodsystem.user_id','category.categoryname')
        ->orderBy('foodsystem.id','desc')
        ->get(),

        'catData'=>category::where('user_id','=', Auth::id())
        ->orderBy('categoryname','asc')->get(),

        'foodNumber'=>$foodNumber,

        'foodEdit_id'=>foodsystem::find($id)
      ]);
    }



    public function foodUpdate(foodRequest $post)
    {
      $modelFood = foodsystem::find($post->id);
      
      $modelFood->category_id = $post->category_id;
      $modelFood->foodname = $post->foodname;
      $modelFood->price = $post->price;

      $modelFood->save();

      return redirect()->route('food')->with('messages1', 'Yemək qeydi uğurla yeniləndi!');
    }
}
