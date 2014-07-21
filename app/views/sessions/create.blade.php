@extends('layouts.default')


@section('content')

 <h1>Login</h1>
	{{ Form::open(array('route' => 'sessions.store', 'class' => 'loginform')) }}

	  <ul>


	  	<li>
	  		
	  		{{ Form::text('email', null,  array('placeholder' => 'Email')) }}
	  	</li>


	  	 <li>
	  		
	        {{ Form::password('password',  array('placeholder' => 'Password')) }}
	  	</li>

	  	<li>
	  		{{ Form::submit('Login') }} 
	  	</li>

	  </ul>

	  <div>
        <p>Don't have an account? <a href="register">Sign up</a></p>


	  </div>


	{{ Form::close() }}
@stop