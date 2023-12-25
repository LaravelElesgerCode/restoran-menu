<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

use App\Http\Requests\logReguest;
use App\Http\Requests\regRequest;

use Illuminate\Support\Facades\Hash;  //<----Laravelde parollara şifrələməni tətbiq etmək üçün istifade edilir!
use Illuminate\Support\Facades\Auth;  //<----Istifadıçinin login/parolunu yoxlayır!
// attemp <----cəhd elə,yoxla


class userController extends Controller
{
    public function logInsert(logReguest $post)
    {
        if(!Auth::attempt(['email'=>$post->email, 'password'=>$post->password]))
          {
            return redirect()->back()->with('messages', 'Daxil etdiyiniz login və ya parol yanlışdır!');
          }
        
        return redirect()->route('indeks');
    }


    public function logout()
    {
      auth()->logout();
      return redirect()->route('logg');
    }


    public function regInsert(regRequest $post)
    {
      $modelUser = new user();

      $check = $modelUser->where('email','=', $post->email)->count();
        
      if($check==0)
        {
          $modelUser->image = 0;
          $modelUser->username = $post->username;
          $modelUser->email = $post->email;
          $modelUser->password = Hash::make($post->password);

          $modelUser->save();

          return redirect()->route('register')->with('messages1', 'Qeydiyyat uğurla bazaya əlavə olundu!');
        }
      
        return redirect()->route('register')->with('messages2', 'Bu email artıq ələvə olunub!');
    }
}
