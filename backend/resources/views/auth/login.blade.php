@extends('layouts.basic')

@section('content')
<section class="hero is-fullheight is-dark is-bold">

    <div class="hero-body">
      <div class="container">
        <div class="columns is-vcentered">
          <div class="column is-4 is-offset-4">

            <div class="form-horizontal" >
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
                <button class="button is-primary" id="btn-login" >Login</button>

              </p>
            </div>
            <p class="has-text-centered">
              <a href="{{url('register')}}">Register an Account</a>
              | 
              <a href="{{url('/password/reset')}}">Forgot password</a>
              | 
              <a href="#">Need help?</a>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section> 
@endsection

@section('scripts')
@parent
<script>
(function(){
    const txtEmail = document.getElementById('email');
    const txtPassword = document.getElementById('password') ; 

    const btnLogin = document.getElementById('btn-login') ;

    btnLogin.addEventListener('click', function(e){
        const email = txtEmail.value ; 
        const password = txtPassword.value ; 
        console.log(email) ; 

        firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
            
            const errorCode = error.code;
            const errorMessage = error.message;
            console.log(errorCode) ; 
            console.log(errorMessage) ; 
            
        });

    });

    firebase.auth().onAuthStateChanged(firebaseUser=> {
      if(firebaseUser) {
        console.log(firebaseUser) ;
      }else {
        console.log('not logged in') ; 
      }
    }) ;

}());
</script>
@endsection