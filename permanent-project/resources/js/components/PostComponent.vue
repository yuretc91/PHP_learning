<template>
    <div>



                <div v-for="post in postdata">

                    <div>{{post.title}}</div>

                    <div>
                        {{post.content}}
                    </div>
                </div>

    </div>
</template>

<script>
    export default {



        /*data: function() {
            return{
                postdata:[]
            }
        },
        mounted(){
            this.show();
        },
        methods:{
            show: function(){
                /!*this.is_refresh = true;
                this.$http.get('/posts/get-posts').then((resp) =>{
                    console.log(resp.data);
                    this.postdata = resp.data;
                });*!/

                this.postdata = 'wegegege';
            }
        }*/
    }
</script>
