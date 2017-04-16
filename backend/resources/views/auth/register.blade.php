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

@endsection