<template>
    <div>
        <!-- Following Menu -->
        <div class="ui large top fixed hidden menu">
            <div class="ui container">
                <a class="active item">Home</a>
                <a class="item">Work</a>
                <a class="item">Company</a>
                <a class="item">Careers</a>
                <div class="right menu">
                    <div class="item">
                        <a class="ui button">Log in</a>
                    </div>
                    <div class="item">
                        <a class="ui primary button">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <div class="ui vertical inverted sidebar menu">
            <a class="active item">Home</a>
            <a class="item">Work</a>
            <a class="item">Company</a>
            <a class="item">Careers</a>
            <a class="item">Login</a>
            <a class="item">Signup</a>
        </div>

        <!-- Page Contents -->
        <div class="pusher">
            <div class="ui inverted vertical center aligned segment">

                <div class="ui container">
                    <div class="ui large secondary inverted pointing menu">
                        <a class="toc item">
                            <i class="sidebar icon"></i>
                        </a>
                        <router-link to="home" class="item">Home</router-link>
                        <router-link to="dashboard" class="item">Dashboard</router-link>
                        <router-link to="test" class="item">Test</router-link>
                        <router-link to="vuetable_demo1" class="item">Vuetable</router-link>
                        <div class="right item">
                            <div v-if="!auth.user.authenticated">
                                <router-link to="register" class="ui inverted button">Register</router-link>
                            </div>
                            <div v-if="!auth.user.authenticated">
                                <router-link to="signin" class="ui inverted button">Sign in</router-link>
                            </div>
                            <div v-if="auth.user.authenticated">
                                <a href="#" v-on:click="signout" class="ui inverted button">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <router-view></router-view>

        </div>
    </div>

</template>

<script>
    import auth from '../auth.js'

    export default {
        data() {
            return {
                auth: auth
            }
        },
        methods: {
            signout() {
                auth.signout()
            }
        },
        ready() {
            auth.check()
        }
    }
</script>