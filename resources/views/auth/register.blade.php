@extends('layouts.basic')

@section('content')
<section class="hero is-fullheight is-info is-bold"> 
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title">
                        Register an Account
                    </h1>

                    @if($errors->has('name'))
                    <div class="notification is-danger">
                        {{$errors->first('name')}}
                    </div>
                    @endif 

                    @if($errors->has('email'))
                    <div class="notification is-danger">
                        {{$errors->first('email')}}
                    </div>
                    @endif

                    @if($errors->has('password'))
                    <div class="notification is-danger">
                        {{$errors->first('password')}}
                    </div>
                    @endif

                    @if($errors->has('password_confirmation'))
                    <div class="notification is-danger">
                        {{$errors->first('password_confirmation')}}
                    </div>
                    @endif



                    <div class="box">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <label class="label">Username</label>
                        <p class="control">
                            <input class="input" id="username" name="name" type="text" value="{{ old('name') }}" required>
                        </p> 

                        <label class="label">Email</label>
                        <p class="control">
                            <input class="input" id="email" name="email" type="text" value="{{ old('email') }}" required>
                        </p> 

                        <label class="label">Password</label>
                        <p class="control">
                            <input id="password" type="password" class="input" name="password" required>
                        </p>

                        <label class="label">Confirm Password</label>
                        <p class="control">
                            <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                        </p> 
                        <hr/>
                        <p class="control">
                            <button class="button is-primary">Register</button>
                            <button class="button is-default">Cancel</button>
                        </p>
                    </form>
                    </div>
                    <p class="has-text-centered">
                        <a href="{{route('login')}}">Login</a>
                        |
                        <a href="#">Need help?</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
