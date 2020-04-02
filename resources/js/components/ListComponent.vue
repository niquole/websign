<template id="app">
    <div>
        <div class="row row-cols-1 row-cols-md-4">
            <div v-for="post in posts">
                <div class="col mb-4 text-white">
                    <div class="card text-center">
                        <img class="card-img-top" :src="post.image" alt="cat"/>
                        <div class="card-body">
                            <div class="card-title">
                                <h4>
                                    {{post.title}} {{post.id}}
                                </h4>
                            </div>
                            <div class="card-text">
                                {{ post.description }}
                            </div>

                            <a href="" class="btn btn-outline-light card-link mt-3 ">visit {{post.user.name}} </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        components: {

        },
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

<style lang="scss">

</style>
