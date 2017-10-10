<template>
    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column">
                    <h3 class="ui header">Dashboard</h3>
                    <p>Laravel53-Vuejs2-Jwt-Auth (imagine10255)</p>
                    <div class="alert alert-danger" v-if="error">
                        <p>There was an error, unable to sign in with those credentials.</p>
                    </div>
                    <form autocomplete="off" v-on:submit="signin">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" class="form-control" placeholder="imagine10255@gmail.com" v-model="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" v-model="password" required>
                        </div>
                        <button type="submit" class="btn btn-default">Sign in</button>
                    </form>
                </div>
                <div class="six wide right floated column">
                    <!--<img src="assets/images/wireframe/white-image.png" class="ui large bordered rounded image">-->
                </div>
            </div>

        </div>
    </div>

</template>

<script>
    import auth from '../auth.js';

    export default {
        data() {
            return {
                email: null,
                password: null,
                error: false
            }
        },
        methods: {
            signin(event) {
                event.preventDefault()
                auth.signin(this, this.email, this.password)
            }
        }
    }
</script>