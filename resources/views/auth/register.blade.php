@extends('layouts.basic')

@section('content')
<section class="hero is-fullheight is-dark is-bold"> 
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-4 is-offset-4">
                    <h1 class="title">
                        Register an Account
                    </h1>

                    <div id="alert-area" class="notification is-danger " style="display:none;">
                        <button class="delete"></button>
                        <p></p>
                    </div>

                    <div class="box">
                        <div class="form-horizontal" >
                            {{ csrf_field() }}

                            <label class="label">Username</label>
                            <p class="control">
                                <input class="input" id="username" name="name" type="text"  required>
                            </p> 

                            <label class="label">Email</label>
                            <p class="control">
                                <input class="input" id="email" name="email" type="text"  required>
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
                                <button class="button is-primary" id="btn-register" >Register</button>
                                
                            </p>
                        </div>
                    </div>
                    <p class="has-text-centered">
                        <a href="/login">Login</a>
                        |
                        <a href="#">Need help?</a>
                    </p>
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
    const txtUsername = document.getElementById('username');
    const txtPassword = document.getElementById('password') ; 

    const btnRegister = document.getElementById('btn-register') ;

    btnRegister.addEventListener('click', function(e){
        const email = txtEmail.value ; 
        const password = txtPassword.value ; 

        const promise = firebase.auth().createUserWithEmailAndPassword(email,password) ; 

        promise.then( user => {
            user.sendEmailVerification();
            firebase.database().ref('users/'+ user.uid).set({
                username : txtUsername.value 
            });
        }).catch(e => {
            let $alertArea = document.getElementById('alert-area') ;
            $alertArea.style.display = 'block' ;
            $alertArea.querySelector('p').innerHTML = e.message;
            console.log(e.message) ; 
        })

    });

}());
</script>
@endsection