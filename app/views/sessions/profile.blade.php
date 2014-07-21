@extends('layouts.account')

@section('content')
  <p>Welcome, {{ Auth::user()->username; }}</p>

     

@stop