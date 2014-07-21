<?php



class SessionsController extends \BaseController {



   /**
    * Add CSRF token
    * 
    * 
    */

   public function __construct() {
   	  $this->beforeFilter('csrf', array('on' => 'post'));
   }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public static function index()
	{
		return View::make('sessions.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        
		if (Auth::check()) {
			return Redirect::to('profile');
		}

		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	     // validate

	  	$input = Input::all();
		$attempt = Auth::attempt([
          'email'     => $input['email'],
          'password'  => $input['password']
		]);

		if ($attempt) return Redirect::to('event/register')->with('flash_message', 'You have been logged in');

		return Redirect::back()->with('flash_message', 'Invalid Credentials')->withInput();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
	   Auth::logout();

	   return Redirect::home()->with('flash_message', 'You have been logged out');
	}


	public function profile($username) {

	  if (Auth::user()->username != $username) {
	  	return Redirect::home();
	  } else {
        $event = EventRegister::all();


		return View::make('sessions.profile')->with('event', $event);
	  }
	}

	public function getRegister() {

        if (Auth::check()) {
			return Redirect::to('profile');
		}

		return View::make('sessions.register');
	}


	public function postRegister() {
		$validator = Validator::make(Input::all(), User::$rules);

		if ($validator->passes()) {
          // valdation has passes, save user in database

			$pass = Input::get('password');
			$passConfirm = Input::get('password_confirmation');

			if ($pass != $passConfirm) {
				return Redirect::to('register')->with('flash_message', 'Passwords do not match');
			}

			$user = new User;
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			// send email to user -- welcoming to site 
			Mail::send('emails.welcome', array('username' => Input::get('username')), function($message) {
                  $message->to(Input::get('email'))->subject("Thanks For Registering to Beacon Workshop");
			}); 

			return Redirect::to('login')->with('flash_message', 'Thanks for registering');

		} else {
          //validation failed, display error messages

			return Redirect::to('register')->with('flash_message', 'The following errors occured')->withErrors($validator)->withInput();
		}
	}
}
