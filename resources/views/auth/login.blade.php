@extends('layouts.basic')

@section('content')
<section class="hero is-fullheight is-dark is-bold">

    <div class="hero-body">
      <div class="container">
        <div class="columns is-vcentered">
          <div class="column is-4 is-offset-4">

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <h1 class="title">
              Login
            </h1>
            <div class="box">
              <label class="label" for="email">Email</label>
              <p class="control">
                <input class="input" id="email" name="email" type="text" value="{{ old('email') }}" required autofocus>
              </p>
              <label class="label" for="password">Password</label>
              <p class="control">
                <input class="input" id="password" name="password" type="password" placeholder="●●●●●●●">
              </p>
              <hr>
              <p class="control">
                <button class="button is-primary">Login</button>
                <button class="button is-default">Cancel</button>
              </p>
            </div>
            <p class="has-text-centered">
              <a href="{{url('register')}}">Register an Account</a>
              | 
              <a href="{{url('/password/reset')}}">Forgot password</a>
              | 
              <a href="#">Need help?</a>
            </p>
            </form>
          </div>
        </div>
      </div>
    </div> 
  </section> 
@endsection
