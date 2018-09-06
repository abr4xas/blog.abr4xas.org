<template>
    <span>
        <li v-for="category in categories" :key="category.id" :class="category.color">
            <a :href="'/category/' + category.slug">
                {{ category.name }}
            </a>
        </li>
    </span>
</template>

<script>
    export default {
        props: {
            categories: {
                type: Array,
                required: true
            }
        },
        mounted() {},
        data() {
            return {

            }
        },
        methods: {}
    }

</script>
