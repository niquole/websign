<template>
    <div>
        <div v-for="post in posts">
            <div class="card" style="width: 18rem;">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <div class="card-body">
                    <h5 class="card-title"> </h5>
                    <p class="card-text"> {{ post.description }} </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
          return {
              posts: []
          }
        },
        mounted() {
            axios.get('/api/posts').then((response)=> {
                this.posts = response.data
            })
        }
    }
</script>