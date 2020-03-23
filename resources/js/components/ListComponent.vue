<template id="app">
    <div class="container">
        <div v-for="post in posts">
            <div class="posts">
                <div class="post">
                    <div class="post_image-holder">
                        <span class="like">Like</span>
                        <img class="post_image" src="https://source.unsplash.com/300x225/?cat" alt="cat"/>
                    </div>
                    <div class="post-title">
                        <h2>
                            {{post.title}} {{post.id}}
                            <small>{{ post.description }}</small>
                        </h2>
                    </div>
                    <div >
                        <a href="#" class="visit_btn">visit {{post.user.name}} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: []
            }
        },
        mounted() {
            axios.get('/api/posts').then((response) => {
                this.posts = response.data
            })
        },
        methods: {}
    }

</script>

<style lang="scss" >

</style>
