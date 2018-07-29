<template>
    <nav aria-label="Page navigation">
        <ul class="pagination  justify-content-end">
            <!-- <li class="page-item" :disabled="pagination.current_page <= 1">
                <a class="page-link" @click.prevent="changePage(1)">
                    First page
                </a>
            </li> -->
            <li class="page-item" :disabled="pagination.current_page <= 1">
                <a class="page-link" @click.prevent="changePage(pagination.current_page - 1)">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li v-for="page in pages" :key="page" class="page-item" :class="isCurrentPage(page) ? 'active' : ''">
                <a class="page-link" @click.prevent="changePage(page)">
                    {{ page }}
                </a>
            </li>
            <li class="page-item" :class="isCurrentPage(page) ? 'active' : ''">
                <a class="page-link" @click.prevent="changePage(pagination.current_page + 1)" :disabled="pagination.current_page >= pagination.last_page">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
            <!-- <li class="page-item" :class="isCurrentPage(page) ? 'active' : ''">
                <a class="page-link" @click.prevent="changePage(pagination.last_page)" :disabled="pagination.current_page >= pagination.last_page">
                    Last page
                </a>
            </li> -->
        </ul>
    </nav>
</template>

<script>
    export default {
        props: ['pagination', 'offset'],
        methods: {
            isCurrentPage(page) {
                return this.pagination.current_page === page;
            },
            changePage(page) {
                if (page > this.pagination.last_page) {
                    page = this.pagination.last_page;
                }
                this.pagination.current_page = page;
                this.$emit('paginate');
            }
        },
        computed: {
            pages() {
                let pages = [];
                let from = this.pagination.current_page - Math.floor(this.offset / 2);
                if (from < 1) {
                    from = 1;
                }
                let to = from + this.offset - 1;
                if (to > this.pagination.last_page) {
                    to = this.pagination.last_page;
                }
                while (from <= to) {
                    pages.push(from);
                    from++;
                }
                return pages;
            }
        },
        data() {
            return {
                page: ''
            }
        }
    }
</script>
<style scoped>
.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 18px 0;
    border-radius: 4px
}

.pagination>li {
    display: inline
}

.pagination>li>a, .pagination>li>span {
    position: relative;
    float: left;
    padding: 6px 12px;
    margin-left: -1px;
    line-height: 1.428571429;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid #ddd
}

.pagination>li:first-child>a, .pagination>li:first-child>span {
    margin-left: 0;
    border-bottom-left-radius: 4px;
    border-top-left-radius: 4px
}

.pagination>li:last-child>a, .pagination>li:last-child>span {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px
}

.pagination>li>a:hover, .pagination>li>span:hover, .pagination>li>a:focus, .pagination>li>span:focus {
    background-color: #eee
}

.pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus {
    z-index: 2;
    color: #fff;
    cursor: default;
    background-color: #428bca;
    border-color: #428bca
}

.pagination>.disabled>span, .pagination>.disabled>span:hover, .pagination>.disabled>span:focus, .pagination>.disabled>a, .pagination>.disabled>a:hover, .pagination>.disabled>a:focus {
    color: #999;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #ddd
}

.pagination-lg>li>a, .pagination-lg>li>span {
    padding: 10px 16px;
    font-size: 17px
}

.pagination-lg>li:first-child>a, .pagination-lg>li:first-child>span {
    border-bottom-left-radius: 6px;
    border-top-left-radius: 6px
}

.pagination-lg>li:last-child>a, .pagination-lg>li:last-child>span {
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px
}

.pagination-sm>li>a, .pagination-sm>li>span {
    padding: 5px 10px;
    font-size: 12px
}

.pagination-sm>li:first-child>a, .pagination-sm>li:first-child>span {
    border-bottom-left-radius: 3px;
    border-top-left-radius: 3px
}

.pagination-sm>li:last-child>a, .pagination-sm>li:last-child>span {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px
}

</style>
