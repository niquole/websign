<template>
    <div class="row">
        <div class="row comment"  v-for="(comment, i) in comments" :key="i">
            <div class="">
                <div class="username">
                    <p class="name">{{ comment.user.name }}</p>
                    <p v-if="user.id == comment.user_id" class="card-articles-category comment-delete" @click="deleteComment(comment.id)" ><span class="material-icons ">clear</span></p>
                </div>
                <div class="time">
                    <p>{{ relativeDate(comment.created_at) }}</p>
                </div>
                <div class="content">
                    <p>{{ comment.content }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["dataComment", "dataUser"],
        data() {
            return {
                user: [],
                post: [],
                comments: []
            }
        },
        mounted() {
            this.post = JSON.parse(this.dataComment);
            this.user = JSON.parse(this.dataUser);
            this.comments = this.post.comments;
            EventBus.$on('comment-submitted', (comment) => {
                this.comments.unshift(comment);
            });
        },
        methods: {
            relativeDate(dt) {
                return moment(dt).fromNow();
            },
            deleteComment($id){
                axios.delete('/api/comments/' + $id).then((response) => {
                    window.location.href = '/articles/' + this.article.id;
                })
            }
        },
    }
</script>
