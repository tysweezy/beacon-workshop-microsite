@extends('layouts.default')

@section('content')
      	<h1 class="page-title">Locations</h1>

			<div class="location">
               {{ HTML::image('img/ggbridge_sf.jpg', $alt="San Francisco") }}


				<p>San Francisco, Thursday, 9/25</p>

				 <a href="event/register" class="registerBtnSml">Register</a>
			</div><!-- /location -->

			<div class="location">
                {{ HTML::image('img/chitown.jpg', $alt="Chicago") }}
 

				<p>Chicago, Tuesday, 10/7</p>


				 <a href="event/register" class="registerBtnSml">Register</a>
			</div><!-- /location -->

			<div class="location">
                {{ HTML::image('img/newyork_cityscape.jpg', $alt="New York") }}

				<p>New York, Thursday, 10/9</p>
				
				 <a href="event/register" class="registerBtnSml">Register</a>
			</div><!-- /location -->

			<div class="location">

				 {{ HTML::image('img/london_booth.jpg', $alt="London") }}
				<p>London, Wednesday, 10/15</p>

				 <a href="event/register" class="registerBtnSml">Register</a>
			</div><!-- /location -->  

	
@stop