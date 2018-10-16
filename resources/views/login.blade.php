@extends('layouts.app')

@section('content')
    <h1>Login</h1>

    @if(isset(Auth::user()->email))
        <script>window.location = "/main/successlogin";</script>
    @endif

    @if($message = Session::get('error'))
        <div class="alert alert-danger">
            <button type="button" data-dismiss="alert" class="close">x</button>
        </div>
        <strong>{{ $message }}</strong>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form metod="post" action="{{ url('/main/checklogin') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Enter Email</label>
            <input type="email" name="email" class="form-control" />
        </div>
        <div class="form-group">
            <label>Enter Password</label>
            <input type="password" name="password" class="form-control" />
        </div>
        <div class="form-group">
            <input type="submit" name="login" class="btn btn-primary" value="Login"/>
        </div>

    </form>
@endsection