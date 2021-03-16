<!-- ./resources/assets/js/components/Home.vue -->
<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="form-group">
                    <label for="title">User Name</label>
                    <input v-model="newPostTitle" id="title" type="text" class="form-control">
                </div>
                <div style="margin-top: 10px;">
                    <button @click="getUserOne()"
                            class="btn btn-block btn-primary">User1</button>
                    <button @click="getUserTwo()"
                            class="btn btn-block btn-primary">User2</button>
                    <button @click="getUserThree()"
                            class="btn btn-block btn-primary">User3</button>
                    <button @click="getUserFour()"
                            class="btn btn-block btn-primary">User4</button>
                </div>

            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            newPostTitle: "",
            pusher:"",
            channel:"",
        }
    },
    created() {
       // this.listen();
    },
    methods: {
        getUserOne() {
            // make API to save post
            axios.post('/api/user-1', null).then( response => {
                console.log(response);
            })
        },
        getUserTwo(){
            // make API to save post
            axios.post('/api/user-2',
              null
            ).then( response => {
                console.log(response);
            })
        },
        getUserThree() {
            // make API to save post
            axios.post('/api/user-3', null).then( response => {
                console.log(response);
            })
        },
        getUserFour(){
            // make API to save post
            axios.post('/api/user-4',
                null
            ).then( response => {
                console.log(response);
            })
        }
    },

}
</script>
