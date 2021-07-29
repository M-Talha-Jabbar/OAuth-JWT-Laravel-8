<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Models\User;

class LoginWithGoogleController extends Controller
{
    /**
    * Redirect the user to the Google authentication page.
    *
    * @return \Illuminate\Http\Response
    */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }


    /**
    * Obtain the user information from Google.
    *
    * @return \Illuminate\Http\Response
    */
    public function handleProviderCallback()
    {
        try {

            $user = Socialite::driver('google')->user();

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                return view('profile',['user' => $user]);

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => bcrypt('123456dummy')
                ]);

                $newUser->save();

                return view('profile',['user' => $user]);
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
