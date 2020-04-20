<template>
    <div class="mt-4">
        <h2>Categories</h2>
        <div class="row row-cols-1 row-cols-md-4">

            <div v-for="category in categories" class="col mb-4 text-white">
                <div class="category-card text-center">
                    <div class="card-body">
                        <a :href="'/categories/' + category.name">
                            <h2>
                                {{ category.name }}
                            </h2>
                        </a>
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
                categories: []
            }
        },
        mounted() {
            axios.get('/api/categories').then((response) => {
                this.categories = response.data
            })
        },
        methods: {}

    }
</script>
