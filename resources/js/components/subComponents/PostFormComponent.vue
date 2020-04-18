<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-md-6 mb-2">
                <div class="card">
                    <div class="card-body">
                        <form enctype="multipart/form-data" class="post-form">
                            <input class="form-control mb-2" placeholder="title" type="text" v-model="form.title">
                            <input class="form-control mb-2" placeholder="description" type="text"
                                   v-model="form.description">
                            <el-upload
                                class="upload-demo"
                                drag
                                action="/api/image/upload"
                                :on-success="handleUpload">
                                <img v-if="form.image" :src="form.image" class="">
                                <div v-else>
                                    <i class="el-icon-upload"></i>
                                    <div class="el-upload__text">Drop file here or <em>click to upload</em></div>
                                    <div class="el-upload__tip" slot="tip">jpg/png files with a size less than 500kb
                                    </div>
                                </div>
                            </el-upload>
                            <select class="form-control mt-3" name="categories" id="categories"
                                    v-model="form.category_id">
                                <option v-for="category in categories" :value="category.id">{{ category.name }}</option>
                            </select>
                            <button @click="submitForm" type="button" class="submitPost btn btn-outline-light form-control mt-3" >Post</button>
                        </form>
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
                categories: [],
                form: {
                    title: "",
                    description: "",
                    image: "",
                    category_id: ""
                }
            }
        },
        methods: {
            handleUpload(result, file) {
                this.form.image = "/storage/" + result.name
            },
            submitForm() {
            axios.post("/api/posts", this.form)
            }
        },
        mounted() {
            axios.get("/api/categories").then((response) => {
                this.categories = response.data;
            })
        }
    }
</script>
