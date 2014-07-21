<?php

class EventController extends \BaseController  {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function getEventPage() {
     if ( ! Auth::check()) {
     	return Redirect::to('login');

     }

      return View::make('eventreg');
	}


	public function postEvent() {
             $rules = array(
      			'first_name'  => 'required',
      			'last_name'   => 'required',
      			'agree'       => 'required'
      		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->passes()) {
			// if validation passes:
			  // save event in DB
			  // user will get email of event details

			// get form data
			//save to DB
			$event = new EventRegister;
			$event->first_name = Input::get('first_name');
			$event->last_name = Input::get('last_name');
			$event->event_email = Auth::user()->email;
			$event->title = Input::get('title');
			$event->company = Input::get('company');
			$event->phone = Input::get('phone');
			$event->city = Input::get('city');
			$event->decipher_client = Input::get('decipher_client');
			$event->diet_requests = Input::get('diet_requests');
			$event->notes = Input::get('notes');
			$event->agree = Input::get('agree');

			$event->save();


            // mail code will go here

			// redirect to either profile page or stay on register page

			return Redirect::to('event/register')->with('event_message', 'You have registered for the event');

		} else {
			// validation failed...display errors

			// redirect to same page -- display errors

			return Redirect::to('event/register')->with('event_message', 'The following errors occured: ')->withErrors($validator)->withInput();

		}
	}




}
