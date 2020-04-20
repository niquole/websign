<template>
    <div>
        <h2>Latest posts</h2>
        <div class="row row-cols-1 row-cols-md-4">
            <div v-for="(post, index) in posts">
                <div class="col mb-4 text-white">
                    <div class="card text-center">
                        <img class="card-img-top" :src="post.image" alt="cat"/>
                        <div class="card-body">
                            <a :href="'/posts/' + post.id" class="card-title">
                                <h4>
                                    {{post.title}}
                                </h4>
                            </a>
                            <div class="card-text">
                                {{ post.description }}
                            </div>
                            <div @click="like(post.id, index)" class="btn btn-outline-light like-btn">
                                <span v-if="post.if_i_liked" class="material-icons">
                                    favorite
                                </span>
                                <span v-else class="material-icons">
                                    favorite_border
                                </span>
                            </div>
                            <div class="">
                                likes:
                                {{post.likes_count}}
                            </div>
                            by:
                            <a :href="'/users/' + post.user_id" class="card-link mt-3  "> {{post.user.name}} </a>
                            <a :href="'/categories/' + post.category.name" class="card-link mt-3">{{ post.category.name }} </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="/posts">
            <button class="btn btn-outline-light float-right "> All posts</button>
        </a>
    </div>
</template>


<script>
    export default {
        components: {},
        data() {
            return {
                posts: []
            }
        },
        mounted() {
            axios.get('/api/posts/latest').then((response) => {
                this.posts = response.data
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
