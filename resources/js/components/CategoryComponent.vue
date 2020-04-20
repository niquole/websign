<template>
    <div>
        <h1>{{category.name }}</h1>
        <div v-for="post in posts">
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

                        <a href="" class="btn btn-outline card-link mt-3 "> {{post.user.name}} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['dataCategory'],
        components: {},
        data() {
            return {
                category: {
                    title: ""
                },
                posts: [
                    {
                        id: "",
                        title: "",
                        description: "",
                        user: {
                            id: "",
                            name: ""
                        }
                    }
                ]

            }
        },
        mounted() {
            this.category = JSON.parse(this.dataCategory);
            this.posts = this.category.posts
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
