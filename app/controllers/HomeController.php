<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showLogin() {
		return View::make('login');
	}

	public function doLogin() {
		$rules = array(
			'email'=>'required|email',
			'password'=>'required|alphaNum|min:3'
		);

		//$validator = validator::make(Input::all(), $rules);

		/*if($validator->fails()) {
			return Redirect::to('login')
			->withError($validator)
			->withInput(Input::except('password'));
		}*/
		//else {
			$userdata = array(
				'email'=>Input::get('email'),
				'password'=>Input::get('password')
			);

			if(Auth::attempt($userdata)) {
				echo "Success loged in";
			}
			else {
				return Redirect::to('login');
			}
		//}
	}
}
