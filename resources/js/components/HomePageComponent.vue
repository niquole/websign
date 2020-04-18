<template>
    <div>
        <div class="row row-cols-1 row-cols-md-4">
            <div v-for="(post, index) in posts">
                <div class="col mb-4 text-white">
                    <div class="card text-center">
                        <img class="card-img-top" :src="post.image" alt="cat"/>
                        <div class="card-body">
                            <a :href="'/post/' + post.id" class="card-title">
                                <h4>
                                    {{post.title}}
                                </h4>
                            </a>
                            <div class="card-text">
                                {{ post.description }}
                            </div>
                            <button @click="like(post.id, index)" class="btn btn-outline-light mt-3 ">
                                <span v-if="post.if_i_liked">
                                    Dislike
                                </span>
                                <span v-else>
                                    Like
                                </span>
                            </button>
                            <div class="mt-3 mb-3">
                                likes:
                                {{post.likes_count}}
                            </div>
                            by:
                            <a href="" class="card-link mt-3 "> {{post.user.name}} </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default {
        components: {},
        data() {
            return {
                posts: [],
                latestPosts: []
            }
        },
        mounted() {
            axios.get('/api/posts').then((response) => {
                this.posts = response.data
            }),
                axios.get('/api/posts/latest').then((response) => {
                    this.latestPosts = response.data
                })
        },
        methods: {
            like(id, index) {
                axios.post('/api/posts/like', {id: id}).then((response) => {
                    this.posts[index].if_i_liked = (response.data.if_i_liked == '1') ? true : false;
                    this.posts[index].likes_count = parseInt(response.data.likes_count);
                })
            }
        }
    }
</script>
