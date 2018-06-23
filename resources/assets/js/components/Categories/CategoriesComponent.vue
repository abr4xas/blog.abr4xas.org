<template>
    <aside class="categories" v-show="show">
        <spinner 
        :status="status"></spinner>
        <div>
            <h2 class="aside-title">Categories</h2>
            <ul class="text-uppercase">
                <li v-for="category in categories" 
                :key="category.id" 
                :class="category.color">
                    <a 
                    :href="'/category/' + category.name">
                        {{ category.name }}
                    </a>
                </li>
            </ul>
        </div>
    </aside>
</template>

<script>
    import axios from 'axios';

    export default {
        mounted() {
            axios.get('/categories')
                .then((respuesta) => {
                    this.categories = respuesta.data.categories
                    this.status = false
                    this.show = true
                })
        },
        data() {
            return {
                categories: [],
                status: true,
                show: false
            }
        },
    }

</script>
