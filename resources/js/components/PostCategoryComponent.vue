<template lang="">
<div>
    <h1>{{ category.title }}</h1>
    <post-list-default v-if="total > 0" :posts="posts" :total="total" :pCurrentPage="currentPage" @getCurrentPage="getCurrentPage" :key="currentPage"></post-list-default>
</div>
</template>

<script>
export default {
    created() {
        this.getPosts();
    },
    methods: {
        postClick: function (p) {
            this.postSelected = p
        },
        getPosts() {

            fetch('/api/post/' + this.$route.params.category_id + '/category?page=' + this.currentPage)
                .then(response => response.json())
                .then(json => {
                    this.posts = json.data.posts.data
                    this.total = json.data.posts.last_page
                    this.category = json.data.category
                })
        },
        getCurrentPage(val) {
            this.currentPage = val;
            this.getPosts();
        }
    },
    data: function () {
        return {

            postSelected: '',
            posts: [],
            category: '',
            total: 0,
            currentPage: 1,
        };
    },
}
</script>

<style lang="">

</style>
