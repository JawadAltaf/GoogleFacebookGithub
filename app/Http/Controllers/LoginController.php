<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Login;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    // For google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $google_user = Socialite::driver('google')->user();
        $user = Login::where('email','=',$google_user->email)->first();
        if(!$user)
        {
            $user = new Login;
            $user->name = $google_user->name;
            $user->email = $google_user->email;
            $user->provider_id = $google_user->id;
            $user->image = $google_user->avatar;
            $user->save();
        }
        if($user)
        {
            // $data['message'] = "You are successfully logged in with Google";
            return redirect('/login/home');
        }
        
    }


    // For facebook
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $facebook_user = Socialite::driver('facebook')->user();
        $user = Login::where('email','=',$facebook_user->email)->first();
        if(!$user)
        {
            $user = new Login;
            $user->name = $facebook_user->name;
            $user->email = $facebook_user->email;
            $user->provider_id = $facebook_user->id;
            $user->image = $facebook_user->avatar;
            $user->save();
        }
        if($user)
        {
            // $data['message'] = "You are successfully logged in with Facebook";
            return redirect('/login/home');
        }
    }


     // For GitHub
     public function redirectToGithub()
     {
         return Socialite::driver('github')->redirect();
     }
 
     public function handleGithubCallback()
     {
         $github_user = Socialite::driver('github')->user();
         $user = Login::where('email','=',$github_user->email)->first();
         if(!$user)
         {
             $user = new Login;
             $user->name = $github_user->name;
             $user->email = $github_user->email;
             $user->provider_id = $github_user->id;
             $user->image = $github_user->avatar;
             $user->save();
         }
         if($user)
         {
            //  $data['message'] = "You are successfully logged in with Github";
            return redirect('/login/home');
         }
     }
    // protected function _registerOrLoginUser($data)
    // {
    //     $user = Login::where('email','=',$data->email)->first();
    //     if(!$user)
    //     {
    //         $user = new Login;
    //         $user->name = $data->name;
    //         $user->email = $data->email;
    //         $user->provider_id = $data->id;
    //         $user->image = $data->avatar;
    //         $user->save();
    //     }
    // }
}
