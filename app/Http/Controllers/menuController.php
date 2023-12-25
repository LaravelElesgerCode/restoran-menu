<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\foodsystem;
use App\Models\category;
use App\Models\table1;
use App\Models\table2;
use App\Models\table3;
use App\Models\table4;
use App\Models\table5;
use App\Models\table6;
use App\Models\table7;
use App\Models\table8;
use App\Models\cabinet1;
use App\Models\cabinet2;


class menuController extends Controller
{

  //<-------------------- //TABLE 1 START// -------------------->
  
    public function t1List()
    { 
      $t1Model = table1::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t1Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t1Nubmer = table1::where('user_id','=', Auth::id())->count();

      return view('table1', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table1Data'=>table1::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't1Number'=>$t1Nubmer
      ]);
    }


    public function t1ShowCat($id)
    {
      $t1Model = table1::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t1Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t1Nubmer = table1::where('user_id','=', Auth::id())->count();

      return view('table1', [
        'foodEdit'=>foodsystem::where('user_id','=', Auth::id())
        ->where('category_id','=',$id)
        ->get(),

        'catEdit'=>category::find($id),
        'table1Data'=>table1::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't1Number'=>$t1Nubmer
      ]);
    }


    public function t1Insert($id)
    {
      $food = foodsystem::find($id); // $id deyil, foodsystem modeli vasitəsilə bizə lazım olan mətni(foodname,price) tapaq

      if($food)   //<---Əgər mövcutdursa $modelTable1 bunları elə
        {
          $modelTable1 = new table1();

          $modelTable1->user_id = Auth::id();
          $modelTable1->foodname = $food->foodname;
          $modelTable1->price = $food->price;

          $modelTable1->save();

          return redirect()->route('table11')->with('messages1', 'Sifariş uğurla daxil oldu!');
        }
      
      return redirect()->route('table11')->with('messages2', 'Sifariş daxil etmək olmadı!');
    }


    public function t1Del($id)
    {
      $t1Model = table1::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t1Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t1Nubmer = table1::where('user_id','=', Auth::id())->count();

      return view('table1', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table1Data'=>table1::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't1Del_id'=>table1::find($id),

        't1Number'=>$t1Nubmer
      ]);
    }


    public function t1DelOkey($t1Del_id)
    {
      $modelTable1 = table1::find($t1Del_id)->delete();

      return redirect()->route('table11')->with('messages1', 'Sifariş uğurla silindi!');
    }


    public function t1Clear()
    {
      $t1Model = table1::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t1Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t1Nubmer = table1::where('user_id','=', Auth::id())->count();

      return view('table1', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table1Data'=>table1::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'table1Order'=>table1::where('user_id','=', Auth::id())->get(), //<---- Hesabı bağlamadan öncə sorğu göndərmək üçün yaradıldı

        't1Number'=>$t1Nubmer
      ]);
    }

    public function t1Clear2()
    {
      table1::query()->where('user_id','=', Auth::id())->delete();

      return redirect()->route('table11')->with('messages2', 'Hesab uğurla bağlandı!');
    }

  //<-------------------- //TABLE 1 END// -------------------->



  //<-------------------- //TABLE 2 START// -------------------->
  
    public function t2List()
    { 
      $t2Model = table2::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t2Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t2Nubmer = table2::where('user_id','=', Auth::id())->count();

      return view('table2', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table2Data'=>table2::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't2Number'=>$t2Nubmer
      ]);
    }


    public function t2ShowCat($id)
    {
      $t2Model = table2::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t2Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t2Nubmer = table2::where('user_id','=', Auth::id())->count();

      return view('table2', [
        'foodEdit'=>foodsystem::where('user_id','=', Auth::id())
        ->where('category_id','=',$id)
        ->get(),

        'catEdit'=>category::find($id),
        'table2Data'=>table2::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't2Number'=>$t2Nubmer
      ]);
    }


    public function t2Insert($id)
    {
      $food = foodsystem::find($id); 

      if($food) 
        {
          $modelTable2 = new table2();

          $modelTable2->user_id = Auth::id();
          $modelTable2->foodname = $food->foodname;
          $modelTable2->price = $food->price;

          $modelTable2->save();

          return redirect()->route('table22')->with('messages1', 'Sifariş uğurla daxil oldu!');
        }
      
      return redirect()->route('table22')->with('messages2', 'Sifariş daxil etmək olmadı!');
    }


    public function t2Del($id)
    {
      $t2Model = table2::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t2Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t2Nubmer = table2::where('user_id','=', Auth::id())->count();

      return view('table2', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table2Data'=>table2::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't2Del_id'=>table2::find($id),

        't2Number'=>$t2Nubmer
      ]);
    }


    public function t2DelOkey($t2Del_id)
    {
      $modelTable2 = table2::find($t2Del_id)->delete();

      return redirect()->route('table22')->with('messages1', 'Sifariş uğurla silindi!');
    }


    public function t2Clear()
    {
      $t2Model = table2::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t2Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t2Nubmer = table2::where('user_id','=', Auth::id())->count();

      return view('table2', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table2Data'=>table2::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'table2Order'=>table2::where('user_id','=', Auth::id())->get(),

        't2Number'=>$t2Nubmer
      ]);
    }


    public function t2Clear2()
    {
      table2::query()->where('user_id','=', Auth::id())->delete();

      return redirect()->route('table22')->with('messages2', 'Hesab uğurla bağlandı!');
    }

  //<-------------------- //TABLE 2 END// -------------------->



  //<-------------------- //TABLE 3 START// -------------------->
  
    public function t3List()
    { 
      $t3Model = table3::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t3Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t3Nubmer = table3::where('user_id','=', Auth::id())->count();

      return view('table3', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table3Data'=>table3::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't3Number'=>$t3Nubmer
      ]);
    }


    public function t3ShowCat($id)
    {
      $t3Model = table3::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t3Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t3Nubmer = table3::where('user_id','=', Auth::id())->count();

      return view('table3', [
        'foodEdit'=>foodsystem::where('user_id','=', Auth::id())
        ->where('category_id','=',$id)
        ->get(),

        'catEdit'=>category::find($id),
        'table3Data'=>table3::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't3Number'=>$t3Nubmer
      ]);
    }


    public function t3Insert($id)
    {
      $food = foodsystem::find($id); 

      if($food) 
        {
          $modelTable3 = new table3();

          $modelTable3->user_id = Auth::id();
          $modelTable3->foodname = $food->foodname;
          $modelTable3->price = $food->price;

          $modelTable3->save();

          return redirect()->route('table33')->with('messages1', 'Sifariş uğurla daxil oldu!');
        }
      
      return redirect()->route('table33')->with('messages2', 'Sifariş daxil etmək olmadı!');
    }


    public function t3Del($id)
    {
      $t3Model = table3::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t3Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t3Nubmer = table3::where('user_id','=', Auth::id())->count();

      return view('table3', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table3Data'=>table3::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't3Del_id'=>table3::find($id),

        't3Number'=>$t3Nubmer
      ]);
    }


    public function t3DelOkey($t3Del_id)
    {
      $modelTable3 = table3::find($t3Del_id)->delete();

      return redirect()->route('table33')->with('messages1', 'Sifariş uğurla silindi!');
    }


    public function t3Clear()
    {
      $t3Model = table3::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t3Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t3Nubmer = table3::where('user_id','=', Auth::id())->count();

      return view('table3', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table3Data'=>table3::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'table3Order'=>table3::where('user_id','=', Auth::id())->get(),

        't3Number'=>$t3Nubmer
      ]);
    }

    public function t3Clear2()
    {
      table3::query()->where('user_id','=', Auth::id())->delete();

      return redirect()->route('table33')->with('messages2', 'Hesab uğurla bağlandı!');
    }

  //<-------------------- //TABLE 3 END// -------------------->



  //<-------------------- //TABLE 4 START// -------------------->
  
    public function t4List()
    { 
      $t4Model = table4::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t4Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t4Nubmer = table4::where('user_id','=', Auth::id())->count();

      return view('table4', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table4Data'=>table4::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't4Number'=>$t4Nubmer
      ]);
    }


    public function t4ShowCat($id)
    {
      $t4Model = table4::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t4Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t4Nubmer = table4::where('user_id','=', Auth::id())->count();

      return view('table4', [
        'foodEdit'=>foodsystem::where('user_id','=', Auth::id())
        ->where('category_id','=',$id)
        ->get(),

        'catEdit'=>category::find($id),
        'table4Data'=>table4::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't4Number'=>$t4Nubmer
      ]);
    }


    public function t4Insert($id)
    {
      $food = foodsystem::find($id); 

      if($food) 
        {
          $modelTable4 = new table4();

          $modelTable4->user_id = Auth::id();
          $modelTable4->foodname = $food->foodname;
          $modelTable4->price = $food->price;

          $modelTable4->save();

          return redirect()->route('table44')->with('messages1', 'Sifariş uğurla daxil oldu!');
        }
      
      return redirect()->route('table44')->with('messages2', 'Sifariş daxil etmək olmadı!');
    }


    public function t4Del($id)
    {
      $t4Model = table4::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t4Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t4Nubmer = table4::where('user_id','=', Auth::id())->count();

      return view('table4', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table4Data'=>table4::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't4Del_id'=>table4::find($id),

        't4Number'=>$t4Nubmer
      ]);
    }


    public function t4DelOkey($t4Del_id)
    {
      $modelTable4 = table4::find($t4Del_id)->delete();

      return redirect()->route('table44')->with('messages1', 'Sifariş uğurla silindi!');
    }


    public function t4Clear()
    {
      $t4Model = table4::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t4Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t4Nubmer = table4::where('user_id','=', Auth::id())->count();

      return view('table4', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table4Data'=>table4::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'table4Order'=>table4::where('user_id','=', Auth::id())->get(),

        't4Number'=>$t4Nubmer
      ]);
    }


    public function t4Clear2()
    {
      table4::query()->where('user_id','=', Auth::id())->delete();

      return redirect()->route('table44')->with('messages2', 'Hesab uğurla bağlandı!');
    }

  //<-------------------- //TABLE 4 END// -------------------->



  //<-------------------- //TABLE 5 START// -------------------->
  
    public function t5List()
    { 
      $t5Model = table5::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t5Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t5Nubmer = table5::where('user_id','=', Auth::id())->count();

      return view('table5', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table5Data'=>table5::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't5Number'=>$t5Nubmer
      ]);
    }


    public function t5ShowCat($id)
    {
      $t5Model = table5::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t5Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t5Nubmer = table5::where('user_id','=', Auth::id())->count();

      return view('table5', [
        'foodEdit'=>foodsystem::where('user_id','=', Auth::id())
        ->where('category_id','=',$id)
        ->get(),

        'catEdit'=>category::find($id),
        'table5Data'=>table5::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't5Number'=>$t5Nubmer
      ]);
    }


    public function t5Insert($id)
    {
      $food = foodsystem::find($id); 

      if($food) 
        {
          $modelTable5 = new table5();

          $modelTable5->user_id = Auth::id();
          $modelTable5->foodname = $food->foodname;
          $modelTable5->price = $food->price;

          $modelTable5->save();

          return redirect()->route('table55')->with('messages1', 'Sifariş uğurla daxil oldu!');
        }
      
      return redirect()->route('table55')->with('messages2', 'Sifariş daxil etmək olmadı!');
    }


    public function t5Del($id)
    {
      $t5Model = table5::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t5Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t5Nubmer = table5::where('user_id','=', Auth::id())->count();

      return view('table5', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table5Data'=>table5::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't5Del_id'=>table5::find($id),

        't5Number'=>$t5Nubmer
      ]);
    }


    public function t5DelOkey($t5Del_id)
    {
      $modelTable5 = table5::find($t5Del_id)->delete();

      return redirect()->route('table55')->with('messages1', 'Sifariş uğurla silindi!');
    }


    public function t5Clear()
    {
      $t5Model = table5::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t5Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t5Nubmer = table5::where('user_id','=', Auth::id())->count();

      return view('table5', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table5Data'=>table5::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'table5Order'=>table5::where('user_id','=', Auth::id())->get(),

        't5Number'=>$t5Nubmer
      ]);
    }


    public function t5Clear2()
    {
      table5::query()->where('user_id','=', Auth::id())->delete();

      return redirect()->route('table55')->with('messages2', 'Hesab uğurla bağlandı!');
}

  //<-------------------- //TABLE 5 END// -------------------->



  //<-------------------- //TABLE 6 START// -------------------->
  
    public function t6List()
    { 
      $t6Model = table6::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t6Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t6Nubmer = table6::where('user_id','=', Auth::id())->count();

      return view('table6', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table6Data'=>table6::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't6Number'=>$t6Nubmer
      ]);
    }


    public function t6ShowCat($id)
    {
      $t6Model = table6::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t6Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t6Nubmer = table6::where('user_id','=', Auth::id())->count();

      return view('table6', [
        'foodEdit'=>foodsystem::where('user_id','=', Auth::id())
        ->where('category_id','=',$id)
        ->get(),

        'catEdit'=>category::find($id),
        'table6Data'=>table6::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't6Number'=>$t6Nubmer
      ]);
    }


    public function t6Insert($id)
    {
      $food = foodsystem::find($id); 

      if($food) 
        {
          $modelTable6 = new table6();

          $modelTable6->user_id = Auth::id();
          $modelTable6->foodname = $food->foodname;
          $modelTable6->price = $food->price;

          $modelTable6->save();

          return redirect()->route('table66')->with('messages1', 'Sifariş uğurla daxil oldu!');
        }
      
      return redirect()->route('table66')->with('messages2', 'Sifariş daxil etmək olmadı!');
    }


    public function t6Del($id)
    {
      $t6Model = table6::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t6Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t6Nubmer = table6::where('user_id','=', Auth::id())->count();

      return view('table6', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table6Data'=>table6::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't6Del_id'=>table6::find($id),

        't6Number'=>$t6Nubmer
      ]);
    }


    public function t6DelOkey($t6Del_id)
    {
      $modelTable6 = table6::find($t6Del_id)->delete();

      return redirect()->route('table66')->with('messages1', 'Sifariş uğurla silindi!');
    }


    public function t6Clear()
    {
      $t6Model = table6::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t6Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t6Nubmer = table6::where('user_id','=', Auth::id())->count();

      return view('table6', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table6Data'=>table6::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'table6Order'=>table6::where('user_id','=', Auth::id())->get(),

        't6Number'=>$t6Nubmer
      ]);
    }


    public function t6Clear2()
    {
      table6::query()->where('user_id','=', Auth::id())->delete();

      return redirect()->route('table66')->with('messages2', 'Hesab uğurla bağlandı!');
    }

  //<-------------------- //TABLE 6 END// -------------------->



  //<-------------------- //TABLE 7 START// -------------------->
  
    public function t7List()
    { 
      $t7Model = table7::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t7Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t7Nubmer = table7::where('user_id','=', Auth::id())->count();

      return view('table7', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table7Data'=>table7::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't7Number'=>$t7Nubmer
      ]);
    }


    public function t7ShowCat($id)
    {
      $t7Model = table7::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t7Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t7Nubmer = table7::where('user_id','=', Auth::id())->count();

      return view('table7', [
        'foodEdit'=>foodsystem::where('user_id','=', Auth::id())
        ->where('category_id','=',$id)
        ->get(),

        'catEdit'=>category::find($id),
        'table7Data'=>table7::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't7Number'=>$t7Nubmer
      ]);
    }


    public function t7Insert($id)
    {
      $food = foodsystem::find($id); 

      if($food) 
        {
          $modelTable7 = new table7();

          $modelTable7->user_id = Auth::id();
          $modelTable7->foodname = $food->foodname;
          $modelTable7->price = $food->price;

          $modelTable7->save();

          return redirect()->route('table77')->with('messages1', 'Sifariş uğurla daxil oldu!');
        }
      
      return redirect()->route('table77')->with('messages2', 'Sifariş daxil etmək olmadı!');
    }


    public function t7Del($id)
    {
      $t7Model = table7::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t7Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t7Nubmer = table7::where('user_id','=', Auth::id())->count();

      return view('table7', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table7Data'=>table7::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't7Del_id'=>table7::find($id),

        't7Number'=>$t7Nubmer
      ]);
    }


    public function t7DelOkey($t7Del_id)
    {
      $modelTable7 = table7::find($t7Del_id)->delete();

      return redirect()->route('table77')->with('messages1', 'Sifariş uğurla silindi!');
    }


    public function t7Clear()
    {
      $t7Model = table7::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t7Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t7Nubmer = table7::where('user_id','=', Auth::id())->count();

      return view('table7', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table7Data'=>table7::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'table7Order'=>table7::where('user_id','=', Auth::id())->get(),

        't7Number'=>$t7Nubmer
      ]);
    }


    public function t7Clear2()
    {
      table7::query()->where('user_id','=', Auth::id())->delete();

      return redirect()->route('table77')->with('messages2', 'Hesab uğurla bağlandı!');
    }

  //<-------------------- //TABLE 7 END// -------------------->



  //<-------------------- //TABLE 8 START// -------------------->
  
    public function t8List()
    { 
      $t8Model = table8::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t8Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t8Nubmer = table8::where('user_id','=', Auth::id())->count();

      return view('table8', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table8Data'=>table8::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't8Number'=>$t8Nubmer
      ]);
    }


    public function t8ShowCat($id)
    {
      $t8Model = table8::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t8Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t8Nubmer = table8::where('user_id','=', Auth::id())->count();

      return view('table8', [
        'foodEdit'=>foodsystem::where('user_id','=', Auth::id())
        ->where('category_id','=',$id)
        ->get(),

        'catEdit'=>category::find($id),
        'table8Data'=>table8::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't8Number'=>$t8Nubmer
      ]);
    }


    public function t8Insert($id)
    {
      $food = foodsystem::find($id); 

      if($food) 
        {
          $modelTable8 = new table8();

          $modelTable8->user_id = Auth::id();
          $modelTable8->foodname = $food->foodname;
          $modelTable8->price = $food->price;

          $modelTable8->save();

          return redirect()->route('table88')->with('messages1', 'Sifariş uğurla daxil oldu!');
        }
      
      return redirect()->route('table88')->with('messages2', 'Sifariş daxil etmək olmadı!');
    }


    public function t8Del($id)
    {
      $t8Model = table8::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t8Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t8Nubmer = table8::where('user_id','=', Auth::id())->count();

      return view('table8', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table8Data'=>table8::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        't8Del_id'=>table8::find($id),

        't8Number'=>$t8Nubmer
      ]);
    }


    public function t8DelOkey($t8Del_id)
    {
      $modelTable8 = table8::find($t8Del_id)->delete();

      return redirect()->route('table88')->with('messages1', 'Sifariş uğurla silindi!');
    }


    public function t8Clear()
    {
      $t8Model = table8::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($t8Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $t8Nubmer = table8::where('user_id','=', Auth::id())->count();

      return view('table8', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'table8Data'=>table8::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'table8Order'=>table8::where('user_id','=', Auth::id())->get(),

        't8Number'=>$t8Nubmer
      ]);
    }


    public function t8Clear2()
    {
      table8::query()->where('user_id','=', Auth::id())->delete();

      return redirect()->route('table88')->with('messages2', 'Hesab uğurla bağlandı!');
    }

  //<-------------------- //TABLE 8 END// -------------------->



  //<-------------------- //CABINET 1 START// -------------------->
  
    public function c1List()
    { 
      $c1Model = cabinet1::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($c1Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $c1Nubmer = cabinet1::where('user_id','=', Auth::id())->count();

      return view('cabinet1', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'cabinet1Data'=>cabinet1::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'c1Number'=>$c1Nubmer
      ]);
    }


    public function c1ShowCat($id)
    {
      $c1Model = cabinet1::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($c1Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $c1Nubmer = cabinet1::where('user_id','=', Auth::id())->count();

      return view('cabinet1', [
        'foodEdit'=>foodsystem::where('user_id','=', Auth::id())
        ->where('category_id','=',$id)
        ->get(),

        'catEdit'=>category::find($id),
        'cabinet1Data'=>cabinet1::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'c1Number'=>$c1Nubmer
      ]);
    }


    public function c1Insert($id)
    {
      $food = foodsystem::find($id); 

      if($food) 
        {
          $modelCabinet1 = new cabinet1();

          $modelCabinet1->user_id = Auth::id();
          $modelCabinet1->foodname = $food->foodname;
          $modelCabinet1->price = $food->price;

          $modelCabinet1->save();

          return redirect()->route('cabinet11')->with('messages1', 'Sifariş uğurla daxil oldu!');
        }
      
      return redirect()->route('cabinet11')->with('messages2', 'Sifariş daxil etmək olmadı!');
    }


    public function c1Del($id)
    {
      $c1Model = cabinet1::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($c1Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $c1Nubmer = cabinet1::where('user_id','=', Auth::id())->count();

      return view('cabinet1', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'cabinet1Data'=>cabinet1::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'c1Del_id'=>cabinet1::find($id),

        'c1Number'=>$c1Nubmer
      ]);
    }


    public function c1DelOkey($c1Del_id)
    {
      $modelCabinet1 = cabinet1::find($c1Del_id)->delete();

      return redirect()->route('cabinet11')->with('messages1', 'Sifariş uğurla silindi!');
    }


    public function c1Clear()
    {
      $c1Model = cabinet1::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($c1Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $c1Nubmer = cabinet1::where('user_id','=', Auth::id())->count();

      return view('cabinet1', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'cabinet1Data'=>cabinet1::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'cabinet1Order'=>cabinet1::where('user_id','=', Auth::id())->get(),

        'c1Number'=>$c1Nubmer
      ]);
    }


    public function c1Clear2()
    {
      cabinet1::query()->where('user_id','=', Auth::id())->delete();

      return redirect()->route('cabinet11')->with('messages2', 'Hesab uğurla bağlandı!');
    }

  //<-------------------- //CABINET 1 END// -------------------->



  //<-------------------- //CABINET 2 START// -------------------->
  
    public function c2List()
    { 
      $c2Model = cabinet2::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($c2Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $c2Nubmer = cabinet2::where('user_id','=', Auth::id())->count();

      return view('cabinet2', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'cabinet2Data'=>cabinet2::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'c2Number'=>$c2Nubmer
      ]);
    }


    public function c2ShowCat($id)
    {
      $c2Model = cabinet2::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($c2Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $c2Nubmer = cabinet2::where('user_id','=', Auth::id())->count();

      return view('cabinet2', [
        'foodEdit'=>foodsystem::where('user_id','=', Auth::id())
        ->where('category_id','=',$id)
        ->get(),

        'catEdit'=>category::find($id),
        'cabinet2Data'=>cabinet2::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'c2Number'=>$c2Nubmer
      ]);
    }


    public function c2Insert($id)
    {
      $food = foodsystem::find($id); 

      if($food) 
        {
          $modelCabinet2 = new cabinet2();

          $modelCabinet2->user_id = Auth::id();
          $modelCabinet2->foodname = $food->foodname;
          $modelCabinet2->price = $food->price;

          $modelCabinet2->save();

          return redirect()->route('cabinet22')->with('messages1', 'Sifariş uğurla daxil oldu!');
        }
      
      return redirect()->route('cabinet22')->with('messages2', 'Sifariş daxil etmək olmadı!');
    }


    public function c2Del($id)
    {
      $c2Model = cabinet2::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($c2Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $c2Nubmer = cabinet2::where('user_id','=', Auth::id())->count();

      return view('cabinet2', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'cabinet2Data'=>cabinet2::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'c2Del_id'=>cabinet2::find($id),

        'c2Number'=>$c2Nubmer
      ]);
    }


    public function c2DelOkey($c2Del_id)
    {
      $modelCabinet2 = cabinet2::find($c2Del_id)->delete();

      return redirect()->route('cabinet22')->with('messages1', 'Sifariş uğurla silindi!');
    }


    public function c2Clear()
    {
      $c2Model = cabinet2::where('user_id','=', Auth::id())->get();
      $totalScore = 0;

      foreach($c2Model as $price)
      {
        $totalScore = $price->price + $totalScore;
      }

      $c2Nubmer = cabinet2::where('user_id','=', Auth::id())->count();

      return view('cabinet2', [
        'catData'=>category::where('user_id','=', Auth::id())->get(),
        'foodData'=>foodsystem::where('user_id','=', Auth::id())->get(),
        'cabinet2Data'=>cabinet2::where('user_id','=', Auth::id())->get(),
        'totalScore'=>$totalScore,

        'cabinet2Order'=>cabinet2::where('user_id','=', Auth::id())->get(),

        'c2Number'=>$c2Nubmer
      ]);
    }


    public function c2Clear2()
    {
      cabinet2::query()->where('user_id','=', Auth::id())->delete();

      return redirect()->route('cabinet22')->with('messages2', 'Hesab uğurla bağlandı!');
    }

  //<-------------------- //CABINET 2 END// -------------------->

}
