@extends('layouts.default')

@section('content')

<h1>Sign up</h1>

{{ Form::open(array('url' => 'register', 'class' => 'signup')) }}


  
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>


  <div>
	  {{ Form::label('username', 'Username') }} <br>
	  {{ Form::text('username', null, array('placeholder' => 'Username'))  }}
  </div>
  
  <div>
	  {{ Form::label('email', 'Email') }} <br>
	  {{ Form::text('email', null, array('placeholder' => 'Email'))  }} 
  </div>

  <div>
	  {{ Form::label('password', 'Password') }} <br>
	  {{ Form::password('password', array('placeholder' => 'Password'))  }}
  </div>
  
  <div>
	  {{ Form::label('password_confirmation', 'Confirm Password') }} <br>
	  {{ Form::password('password_confirmation', array('placeholder' => 'Confirm Password'))  }}
  </div>


  {{ Form::submit('Register') }}

    <p style="margin-top: 10px">Already have an account? <a href="login">Log in</a></p>
{{ Form::close() }}

@stop