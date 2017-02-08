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
                    
                    <register-form></register-form>
                   
                    
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

    /*
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
    */

}());
</script>
@endsection