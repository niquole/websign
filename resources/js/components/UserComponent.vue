<template>
    <div>
        <h1> {{ user.name }}</h1>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ["dataUser"],
        data() {
            return {
                user: {
                    name: ""
                },
                posts: [
                    {
                        id: "",
                        title: "",
                        description: "",
                    }
                ]
            }
        },
        mounted() {
            this.user = JSON.parse(this.dataUser);
            this.posts = this.user.posts;
        },
        methods: {}
    }
</script>
