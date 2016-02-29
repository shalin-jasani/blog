<?php

namespace App\Http\Controllers;

use App\loginModel;
use App\Http\Requests;

use App\Http\Requests\BlogLoginRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;


class loginController extends Controller
{
		public function  checkLogin(BlogLoginRequest $request)
		{

				if (Input::get('username') == 'admin@gmail.com') {
					$user = ['username' => Input::get('username'), 'password' => Input::get('password')];
					if (Auth::attempt($user)) {
						Session::put('username', Input::get('username'));
						Session::put('user_id');
						Session::flash('loginMessage','Successfully Login....');
						return redirect()->action('adminController@index');
					} else {
						return back();
					}
				} else {
					$user = ['username' => Input::get('username'), 'password' => Input::get('password')];
					if (Auth::attempt($user)) {
						Session::put('username', Input::get('username'));
						Session::put('user_id');
						Session::flash('loginMessage','Successfully Login....');

						/*Mail::send('email.welcome',['user' => Input::get('username')], function ($message) {
							$message->to(Input::get('username'));
						});*/

						return redirect()->action('blogController@index');
					} else {
						return back();
					}
				}
		}

		public function logout()
		{
			Auth::logout();
			Session::flush();
			return redirect()->action('blogController@index');
		}

}
