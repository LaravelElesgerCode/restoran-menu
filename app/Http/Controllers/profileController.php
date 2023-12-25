<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\profileRequest;

use Illuminate\Support\Facades\Hash;  
use Illuminate\Support\Facades\Auth;  
use App\Models\user;

class profileController extends Controller
{
    public function index() 
    {
      return view('profile', [
      'profdata'=>User::find(Auth::id())->get(),
      ]);
    }



    public function profInsert(profileRequest $post)
    {
       $modelUser = user::find(Auth::id());

       if(Hash::check($post->current_password, $modelUser->password))
         {
           if(empty($post->new_password) or strlen($post->new_password)>2)// strlen <----Parola lazımı uzunluqda element verir(Məs:Parol ən az 2 elementdə olmalıdır!)
             {
               if($post->new_password == $post->repaet_password)
                 {
                   $post->validate([
                      'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:4096|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
                     ]);
        
                   if($post->file('image'))
                     {
                      $file = time().'.'.$post->image->extension();
                      $post->image->storeAs('public/uploads/profilee/',$file);
                      $modelUser->image ='storage/uploads/profilee/'.$file;
                     }

                   else
                     {$modelUser->image = $post->current_image;}

                   if($post->new_password>3)
                     {$modelUser->password = Hash::make($post->new_password);}

                   else
                     {
                      $modelUser->username = $post->username;
                      $modelUser->email = $post->email;
                     }
                    
                   $modelUser->save();

                   return redirect()->route('profilee')->with('messages1', 'Profildə ki, dəyişikliklər uğurla həyata keçirildi!');
                 }  

               return redirect()->route('profilee')->with('messages2', 'Yeni parol və təkrar parol uyğun deyil,təkrar cəhd edin!');
             }
           
           return redirect()->route('profilee')->with('messages2', 'Yeni parol doldurulmayıb və ya 3 simvuldan az şifrə daxil edilib!');
         }
       
       return redirect()->route('profilee')->with('messages2', 'Cari parol yanlışdır və ya doldurulmayıb!');
    }

}
