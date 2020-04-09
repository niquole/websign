<template>
    <div class="container">
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

                    <a href="" class="btn btn-outline-light card-link mt-3 "> {{post.user.name}} </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["dataPost"],
        data() {
            return {
                post: []
            }
        },
        mounted() {
            this.post = JSON.parse(this.dataPost);
        },
        methods: {}
    }
</script>
