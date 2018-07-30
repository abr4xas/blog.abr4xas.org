<template>
    <div>
        <article class="recipe-article" v-for="post in posts" :key="post.id">
            <header>
                <span class="ampstart-subtitle block px3 pt2 mb2">{{ post.category }}</span>
                <h1 class="mb1 px3">
                    {{ post.title }}
                </h1>
                <address class="ampstart-byline clearfix mb4 px3 h5">
                    <time class="ampstart-byline-pubdate block bold my1" :datetime="post.datetime">
                        {{ post.custom_date }}
                    </time>
                </address>
                <amp-img v-if="post.image" :src="post.image" width="710" height="210" layout="responsive" alt="" class="mb4 mx3"></amp-img>
            </header>
            <div class="mb4 px3">
                <div v-html="post.description"></div>
                <br>
                <a :href="/amp/+ post.slug">Leer completo</a>
            </div>
            <p></p>
        </article>
        <div class="custom-pagination">
            <pagination 
                v-if="pagination.last_page > 1" 
                :pagination="pagination" 
                :offset="11" 
                @paginate="getResults()"></pagination>
        </div>
    </div>
</template>


<script>
    import axios from 'axios';

    export default {
        name: 'ParentPostComponent',
        mounted() {
            this.getResults();
        },
        methods: {
            getResults() {
                axios.get('/amp?page=' + this.pagination.current_page)
                    .then(respuesta => {
                        this.posts = respuesta.data.posts.data
                        this.pagination = respuesta.data.posts
                    });
            },
        },
        data() {
            return {
                posts: {},
                pagination: {
                    'current_page': 1
                },
            }
        }
    }
</script>
<style scoped>
.custom-pagination {
    width: 74vw;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
</style>
