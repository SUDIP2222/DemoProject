<template>
    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column">
                    <h3 class="ui header">Register</h3>
                    <p>Laravel53-Vuejs2-Jwt-Auth (imagine10255)</p>
                    <div class="alert alert-danger" v-if="error && !success">
                        <p>There was an error, unable to complete registration.</p>
                    </div>
                    <div class="alert alert-success" v-if="success">
                        <p>Registration completed. You can now sign in.</p>
                    </div>

                    <form autocomplete="off" v-on:submit="register" v-if="!success">
                        <div class="form-group" v-bind:class="{ 'has-error': error && response.username }">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" v-model="name" required>
                            <span class="help-block" v-if="error && response.name">{{ response.name }}</span>
                        </div>
                        <div class="form-group" v-bind:class="{ 'has-error': error && response.email }">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" class="form-control" placeholder="imagine10255@gmail.com" v-model="email" required>
                            <span class="help-block" v-if="error && response.email">{{ response.email }}</span>
                        </div>
                        <div class="form-group" v-bind:class="{ 'has-error': error && response.password }">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="form-control" v-model="password" required>
                            <span class="help-block" v-if="error && response.password">{{ response.password }}</span>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
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
                name: null,
                email: null,
                password: null,
                success: false,
                error: false,
                response: null
            }
        },
        methods: {
            register(event) {
                event.preventDefault()
                auth.register(this, this.name, this.email, this.password)
            }
        }
    }
</script>