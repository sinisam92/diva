@extends('layouts.app')

@section('content')
    @if(isset(Auth::user()->email))
        <div class="alert alert-danger success-block">
            <strong>Welcome {{ Auth::user()->emial }}</strong>
            <br />
            <a href="{{ url('/main/logout') }}">Logout</a>
        </div>
    else
        <script>window.location = "/main";</script>
    @endif
@endsection