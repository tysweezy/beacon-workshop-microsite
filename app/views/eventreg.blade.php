@extends('layouts.account')

@section('content')




  <div style="float: right;">

  	{{ 'Welcome, ' . Auth::user()->email; }} <br>

  	<a href="../logout">Logout</a>

  </div>



  <h1>Register for Event</h1>

      @if (Session::get('event_message'))
	   <div class="flash">
	   	{{ Session::get('event_message') }}
	   </div>
      @endif


    <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>

  {{ Form::open(array('url' => 'event/register', 'class' => 'eventregister')) }}
	<div>
      {{ Form::label("first_name", "First Name") }} <br>
	  {{ Form::text('first_name', null, array('placeholder' => 'First Name'))}}
	</div>

	<div>
		{{ Form::label("last_name", "Last Name") }} <br>
		{{ Form::text("last_name", null, array('placeholder' => 'Last Name')) }}
	</div>


	<div>
		{{ Form::label("title", "Title") }} <br>
		{{ Form::text("title", null, array('placeholder' => 'Title')) }}
	</div>

	<div>
		{{ Form::label("company", "Company") }} <br>
		{{ Form::text("company", null, array('placeholder' => 'Company')) }}
	</div>

	<div>
		{{ Form::label("phone", "Phone") }} <br>
		{{ Form::text("phone", null, array('placeholder' => 'Phone')) }}
	</div>

	<div>
      {{ Form::label("city", "Select Event") }}
	  {{ Form::select("city", array(
        'sanfrancisco'  => 'San Francisco (9/25)',
        'chicago'       => 'Chicago (10/7)',
        'newyork'       => 'New York (10/9)',
        'london'        => 'London (10/15)')) }}
	</div>

	<div>
		{{ Form::checkbox("decipher_client", "Yes") }}
		{{ Form::label("decipher_client", "Decipher Client?") }}
	
	</div>

	<div>
		{{ Form::label("diet_requests", "Dietary Requests") }} <br>
		{{ Form::textarea("diet_requests", null, array('placeholder' => 'Dietary Requests')) }}
	</div>

	<div>
		{{ Form::label("notes", "Notes") }} <br>
		{{ Form::textarea("notes", null, array('placeholder' => 'Notes')) }}
	</div>

	<div>
		{{ Form::checkbox("agree") }} 
		{{ Form::label("agree", "I agree to the terms and conditions") }}
		
	</div>

	<div>
       {{ Form::submit("Register For Event") }}
	</div>

    
  {{ Form::close() }}
@stop