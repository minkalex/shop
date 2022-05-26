<template>
    <div>
        <section class="product-categories-one pb-60">
            <div class="container">
                <div class="row wow fadeInUp animated">
                    <div class="col-xl-12">
                        <div class="product-categories-one__inner">
                            <ul>
                                <li v-for="topCategory in topCategories" :key="topCategory.id">
                                    <a :href="'/categories/' + topCategory.id" class="img-box">
                                        <div class="inner">
                                            <img :src="'storage/' + topCategory.image" :alt="topCategory.title"/>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <a :href="'/categories/' + topCategory.id">
                                            <h6>{{ topCategory.title }}</h6>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="product-grid pt-60 pb-120">
            <div class="container">
                <div class="row gx-4">
                    <div class="col-xl-3 col-lg-4">
                        <div class="shop-grid-sidebar">
                            <button class="remove-sidebar d-lg-none d-block"><i
                                class="flaticon-cross"> </i></button>
                            <div class="sidebar-holder">
                                <div class="single-sidebar-box mt-30 wow fadeInUp animated ">
                                    <h4>all categories</h4>
                                    <ul
                                        class="footer-links"
                                        style="padding-top: unset"
                                        v-for="category in categories"
                                        :key="category.id"
                                    >
                                        <li><a :href="'/categories/' + category.id">{{ category.title }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';

export default {
    data() {
        return {
            topCategories: [],
            //categories: []
        }
    },
    /*created() {
        let self = this
        axios.get('/categories')
            .then(res => {
                res.data.data.forEach(function (objCategory) {
                    if (objCategory.active) {
                        self.allCategories.push(objCategory)
                        if (self.topCategories.length < 6) {
                            self.topCategories.push(objCategory)
                        }
                    }
                })
            })
    },*/

    mounted() {
        this.getCategories()
    },

    methods: {
        ...mapActions([
            'getCategories'
        ])
    },

    computed: {
        ...mapGetters([
            'categories'
        ])
    }
}
</script>
