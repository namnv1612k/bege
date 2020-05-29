<template>
    <nav>
        <ul class="categori-menu-list menu-hidden">
            <li v-for="grandcate in categories" v-if="grandcate.subcategory === null" :key="grandcate.slug">
                <a :href="grandcate.slug">
                    <span><img :src="grandcate.icon" alt="menu-icon"></span>{{ grandcate.name }}
                    <i v-if="subcate(grandcate.id)" class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
                <ul v-if="subcate(grandcate.id)" class="ht-dropdown megamenu custom-megamenu">
                    <li v-for="fathercate in categories" v-if="fathercate.subcategory === grandcate.id" class="single-megamenu">
                        <ul>
                            <li class="menu-tile">{{ fathercate.name }}</li>
                            <li v-for="childcate in categories" v-if="childcate.subcategory === fathercate.id">
                                <a :href="childcate.slug">{{ childcate.name }}</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</template>

<script>
    import axios from "axios";

    export default {
        name: "MegaCategory",
        data() {
            return {
                categories: []
            }
        },
        /*created() {
          console.log(this.categories)
        },*/
        mounted() {
            axios.get('api/megacategory')
                .then(response => (this.categories = response.data))
                .catch(function (response) {
                    console.log(response)
                })
        },
        methods: {
            subcate(id){
                let $return = false;
                for (let i = 0; i < this.categories.length; i++) {
                    if (id === this.categories[i].subcategory) {
                        $return = true
                    }
                }
                return $return;
            }
        }
    }
</script>
