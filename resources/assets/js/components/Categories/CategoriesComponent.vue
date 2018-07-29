<template>
    <span>
        <li v-for="category in categories" :key="category.id" :class="category.color">
            <a :href="'/category/' + category.name">
                {{ category.slug }}
            </a>
        </li>
    </span>
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
