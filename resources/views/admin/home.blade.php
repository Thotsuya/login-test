@extends('layouts.auth')

@section('content')
    You are logged in! <br>
    Welcome {{ auth()->user()->name }}
@endsection
