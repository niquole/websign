<template>
    <div class="mt-4">
        <h1>Categories</h1>
        <div class="row row-cols-1 row-cols-md-4">

            <div class="col mb-4 text-white">
                <div class="category-card text-center">
                    <div class="card-body">
                        <a href="">
                            <h2>
                                CATEGORY NAME
                            </h2>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col mb-4 text-white">
                <div class="category-card text-center">
                    <div class="card-body">
                        <a href="">
                            <h2>
                                CATEGORY NAME
                            </h2>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col mb-4 text-white">
                <div class="category-card text-center">
                    <div class="card-body">
                        <a href="">
                            <h2>
                                CATEGORY NAME
                            </h2>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col mb-4 text-white">
                <div class="category-card text-center">
                    <div class="card-body">
                        <a href="">
                            <h2>
                                CATEGORY NAME
                            </h2>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <a href="/categories">
            <button class="btn btn-outline-light  float-right ">All categories</button>
        </a>
    </div>
</template>


<script>
    export default {
        components: {},
        data() {
            return {
                categories: []
            }
        },
        mounted() {
            axios.get('/api/posts/latest').then((response) => {
                this.posts = response.data
            })
        },
        methods: {}

    }
</script>
