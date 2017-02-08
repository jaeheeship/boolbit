<template>
    <div class="box">
        <div class="form-horizontal" >

            <label class="label">Username</label>
            <p class="control">
                <input class="input" id="username" name="name" type="text" required v-model="username">
            </p> 

            <label class="label">Email</label>
            <p class="control">
                <input class="input" id="email" name="email" type="text"  required v-model="email">
            </p> 

            <label class="label">Password</label>
            <p class="control">
                <input id="password" type="password" class="input" name="password" required v-model="password">
            </p>

            <label class="label">Confirm Password</label>
            <p class="control">
                <input id="password-confirm" type="password" class="input" name="password_confirmation" required v-model="password_confirm">
            </p> 
            <hr/>
            <p class="control">
                <button class="button is-primary" id="btn-register" v-on:click="register">Register</button>
                
            </p>
        </div>
    </div>
</template>

<script>


    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                username : '',
                email : '', 
                password: '',
                password_confirm : ''
            }
        },
        computed : {

        },
        methods: {
            register() {
                const email = this.email ; 
                const password = this.password ; 
                const username = this.username ; 

                const promise = FirebaseApp.auth().createUserWithEmailAndPassword(email,password) ; 

                promise.then( user => {
                    user.sendEmailVerification();
                    FirebaseApp.database().ref('users/'+ user.uid).set({
                        username : username 
                    });
                }).catch(e => {
                    /*
                    let $alertArea = document.getElementById('alert-area') ;
                    $alertArea.style.display = 'block' ;
                    $alertArea.querySelector('p').innerHTML = e.message;*/
                    console.log(e.message) ; 
                })
                
            }
        }
    }
</script>
