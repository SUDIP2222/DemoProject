<template>
    <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column">
                    <h3 class="ui header">Test</h3>
                    <p>Laravel53-Vuejs2-Jwt-Auth (imagine10255)</p>
                    <p>
                        {{ msg }}
                    </p>
                    <p>
                        <div class="ui buttons">
                            <button class="ui button" @click="open_modal('horizontal flip')">彈出視窗1</button>
                            <div class="or"></div>
                            <button class="ui positive button" @click="open_modal('vertical flip')">彈出視窗2</button>
                        </div>
                    </p>
                </div>
                <div class="six wide right floated column">
                    <!--<img src="assets/images/wireframe/white-image.png" class="ui large bordered rounded image">-->
                </div>
            </div>

        </div>

        <div class="ui fullscreen modal ">
            <i class="close icon"></i>
            <div class="header">
                Profile Picture
            </div>
            <div class="image content">
                <div class="ui medium image">
                    <img src="/images/avatar/large/chris.jpg">
                </div>
                <div class="description">
                    <div class="ui header">We've auto-chosen a profile image for you.</div>
                    <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
                    <p>Is it okay to use this photo?</p>
                </div>
            </div>
            <div class="actions">
                <div class="ui cancel red basic inverted button">
                    <i class="remove icon"></i>
                    No
                </div>
                <div class="ui ok green basic inverted button">
                    <i class="checkmark icon"></i>
                    Yes
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                msg: '這是一個測試訊息, 透過Vue的方式進行綁定給值'
            }
        },
        methods : {
            open_modal : function(transition){
                $('.fullscreen.modal')
                    .modal('setting', 'transition', transition)
                    .modal('show')
            }
        }
    }

    /*
     #與下面寫法相等,但是在這必須使用上面的方法
         new Vue({
             data: {
                message: 'Hello Vue.js!'
             }
         })
     */
</script>
