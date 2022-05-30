<template>
    <main class="overflow-hidden ">
        <section class="product-categories-one pb-60" v-if="category">
            <div class="container">
                <div class="row wow fadeInUp animated">
                    <div class="col-xl-12">
                        <div class="product-categories-one__inner">
                            <ul>
                                <li>
                                    <a href="#" class="img-box">
                                        <div class="inner">
                                            <img :src="'../storage/' + category.image" :alt="category.title"/>
                                        </div>
                                    </a>
                                    <div class="title">
                                        <a href="#">
                                            <h6>{{ category.title }}</h6>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="my-account-page pt-120 pb-120">
            <div class="container">
                <div class="row wow fadeInUp animated">
                    <div class="col-xl-3 col-lg-4">
                        <div class="d-flex align-items-start">
                            <div
                                class="nav my-account-page__menu flex-column nav-pills me-3"
                                id="v-pills-tab"
                                role="tablist"
                                aria-orientation="vertical"
                            >
                                <button
                                    class="nav-link active"
                                    id="v-pills-dashboard-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#v-pills-dashboard"
                                    type="button"
                                    role="tab"
                                    aria-controls="v-pills-dashboard"
                                    aria-selected="true"
                                >
                                    <span> products</span></button>
                                <button
                                    class="nav-link"
                                    id="v-pills-orders-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#v-pills-orders"
                                    type="button"
                                    role="tab"
                                    aria-controls="v-pills-orders"
                                    aria-selected="false"
                                    @click="goToUpdate"
                                >
                                    <span> edit category</span>
                                </button>
                                <button
                                    class="nav-link"
                                    id="product-add-button"
                                    data-bs-toggle="pill"
                                    data-bs-target="#product-add-button"
                                    type="button"
                                    role="tab"
                                    aria-controls="product-add-button"
                                    aria-selected="false"
                                >
                                    <span> add product</span>
                                </button>
                                <button
                                    class="nav-link"
                                    id="v-pills-downloads-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#v-pills-downloads"
                                    type="button"
                                    role="tab"
                                    aria-controls="v-pills-downloads"
                                    aria-selected="false"
                                >
                                    <span> delete category</span>
                                </button>
                                <button
                                    class="nav-link"
                                    id="all-categories-button"
                                    data-bs-toggle="pill"
                                    data-bs-target="#all-categories-button"
                                    type="button"
                                    role="tab"
                                    aria-controls="all-categories-button"
                                    aria-selected="false"
                                    @click="goToIndex"
                                >
                                    <span> all categories</span>
                                </button>
                                <button
                                    class="nav-link"
                                    id="add-category-button"
                                    data-bs-toggle="pill"
                                    data-bs-target="#add-category-button"
                                    type="button"
                                    role="tab"
                                    aria-controls="add-category-button"
                                    aria-selected="false"
                                    @click="goToCreate"
                                >
                                    <span> add category</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="row">
                            <div class="col-xl-12">
                                <div
                                    class="shop-grid-page-top-info p-0 justify-content-md-between justify-content-center"
                                >
                                    <div
                                        class="left-box wow fadeInUp  animated"
                                        style="visibility: visible;
                                        animation-name: fadeInUp;"
                                    >
                                        <p>Showing 4–6 of N Results</p>
                                    </div>
                                    <div
                                        class="right-box justify-content-md-between justify-content-center wow fadeInUp  animated"
                                        style="visibility: visible;
                                        animation-name: fadeInUp;"
                                    >
                                        <form
                                            action="#0"
                                            class="shop-grid-sidebar footer-default__subscrib-form m-0 p-0 wow fadeInUp  animated me-3 mt-2"
                                            style="visibility: visible;
                                            animation-name: fadeInUp;"
                                        >
                                            <div class="footer-input-box p-0 ">
                                                <input type="text" placeholder="enter product name..." name="find">
                                                <button type="submit" class="subscribe_btn">
                                                    <i class="flaticon-magnifying-glass"></i>
                                                </button>
                                            </div>
                                        </form>
                                        <div class="short-by">
                                            <div class="select-box">
                                                <select class="wide" style="display: none;">
                                                    <option data-display="Short by latest">Featured</option>
                                                    <option value="1">Best selling</option>
                                                    <option value="2">Alphabetically, A-Z</option>
                                                    <option value="3">Alphabetically, Z-A</option>
                                                    <option value="3">Price, low to high</option>
                                                    <option value="3">Price, high to low</option>
                                                    <option value="3">Date, old to new</option>
                                                </select>
                                                <div class="nice-select wide" tabindex="0"><span class="current">Short by latest</span>
                                                    <ul class="list">
                                                        <li
                                                            data-value="Featured"
                                                            data-display="Short by latest"
                                                            class="option selected"
                                                        >
                                                            Featured
                                                        </li>
                                                        <li data-value="1" class="option">Best selling</li>
                                                        <li data-value="2" class="option">Alphabetically, A-Z</li>
                                                        <li data-value="3" class="option">Alphabetically, Z-A</li>
                                                        <li data-value="3" class="option">Price, low to high</li>
                                                        <li data-value="3" class="option">Price, high to low</li>
                                                        <li data-value="3" class="option">Date, old to new</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="product-view-style d-flex justify-content-md-between justify-content-center"
                                        >
                                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button
                                                        class="nav-link active"
                                                        id="pills-grid-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#pills-grid"
                                                        type="button"
                                                        role="tab"
                                                        aria-selected="true"
                                                    >
                                                        <i class="flaticon-grid"></i>
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button
                                                        class="nav-link"
                                                        id="pills-list-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#pills-list"
                                                        type="button"
                                                        role="tab"
                                                        aria-selected="false"
                                                    >
                                                        <i class="flaticon-list"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                            <button class="slidebarfilter d-lg-none d-flex">
                                                <i class="flaticon-edit"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content" id="pills-tabContent">
                                    <div
                                        class="tab-pane fade active show"
                                        id="pills-grid"
                                        role="tabpanel"
                                        aria-labelledby="pills-grid-tab"
                                    >
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-6 col-6 ">
                                                <div class="products-three-single w-100  mt-30">
                                                    <div class="products-three-single-img">
                                                        <a href="shop-details-3.html" class="d-block">
                                                            <img
                                                                src="/storage/images/products/dummy.jpg"
                                                                class="first-img"
                                                                alt=""
                                                            >
                                                        </a>
                                                        <a href="shop-details-2.html" class="d-block">
                                                            <img
                                                                src="/storage/images/products/dummy.jpg"
                                                                class="second-img" alt=""
                                                            >
                                                        </a>
                                                    </div>
                                                    <div class="products-three-single-content text-center">
                                                        <h5>
                                                            <a href="shop-details-3.html"> Trendy stylish shoes </a>
                                                        </h5>
                                                        <p>$159.00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="tab-pane fade"
                                        id="pills-list"
                                        role="tabpanel"
                                        aria-labelledby="pills-list-tab"
                                    >
                                        <div class="row ">
                                            <div class="col-12">
                                                <div class="product-grid-two list mt-30 ">
                                                    <div class="product-grid-two__img">
                                                        <a href="shop-details-2.html" class="d-block">
                                                            <img
                                                                src="/storage/images/products/dummy.jpg"
                                                                class="first-img" alt=""
                                                            >
                                                        </a>
                                                        <a href="shop-details-2.html" class="d-block">
                                                            <img
                                                                src="/storage/images/products/dummy.jpg"
                                                                class="second-img" alt=""
                                                            >
                                                        </a>
                                                    </div>
                                                    <div class="product-grid-two-content text-center">
                                                        <h5><a href="shop-details-2.html">Trendy stylish shoes </a></h5>
                                                        <p>$159.00</p>
                                                        <p class="text">
                                                            Typi non habent claritatem insitam usus
                                                            legentis qui facit eorum claritatem Investigationes
                                                            demonstraverunt lectores legere mele lius quod legunt
                                                            saepius Claritas est etiam processus a capitalize on low
                                                            hanging
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 d-flex justify-content-center wow fadeInUp animated">
                                <ul class="pagination text-center">
                                    <li class="next">
                                        <a href="#0">
                                            <i class="flaticon-left-arrows" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0">1</a>
                                    </li>
                                    <li>
                                        <a href="#0" class="active">2</a>
                                    </li>
                                    <li>
                                        <a href="#0">3</a>
                                    </li>
                                    <li>
                                        <a href="#0">...</a>
                                    </li>
                                    <li>
                                        <a href="#0">10</a>
                                    </li>
                                    <li class="next">
                                        <a href="#0">
                                            <i class="flaticon-next-1" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';

export default {
    mounted() {
        this.getCategory(this.$route.params.id)
    },

    methods: {
        ...mapActions([
            'getCategory'
        ]),

        goToCreate() {
            this.$router.push({name: 'categories.create'})
        },

        goToUpdate() {
            this.$router.push({name: 'categories.edit', params: {id: this.$route.params.id}})
        },

        goToIndex() {
            this.$router.push({name: 'categories.index'})
        },
    },

    computed: {
        ...mapGetters([
            'category'
        ])
    }
}
</script>

<style scoped>

</style>
