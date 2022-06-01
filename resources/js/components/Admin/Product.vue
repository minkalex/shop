<template>
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="yes" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"
                />
                <path
                    d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.235.235 0 0 1 .02-.022z"
                />
            </symbol>
            <symbol id="no" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"
                />
                <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"
                />
            </symbol>
            <symbol id="edit" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"
                />
                <path
                    fill-rule="evenodd"
                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"
                />
            </symbol>
            <symbol id="delete" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"
                />
                <path
                    fill-rule="evenodd"
                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"
                />
            </symbol>
            <symbol id="add" fill="currentColor" viewBox="0 0 16 16">
                <path
                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"
                />
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"
                />
            </symbol>
        </svg>
        <a
            data-bs-toggle="modal"
            data-bs-target="#addCategory"
            class="text-decoration-none float-right"
            title="Create new category"
            @click="setOriginalValues()"
        >
            <svg class="bi flex-shrink-0 me-2 mb-3" width="24" height="24" role="img" aria-label="Add:">
                <use xlink:href="#add"/>
            </svg>
        </a>
        <!-- Modal for creating category-->
        <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form @submit.prevent="createOrUpdateCategory({title, top, active, image})">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New category</h5>
                        </div>
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="new-category-title">Title</span>
                                </div>
                                <input
                                    type="text"
                                    class="form-control"
                                    aria-label="Category title"
                                    aria-describedby="new-category-title"
                                    v-model="title"
                                >
                            </div>
                            <div class="custom-file mb-3">
                                <input
                                    type="file"
                                    class="custom-file-input"
                                    id="new-category-image"
                                    aria-describedby="new-category-image"
                                    @change="getFile"
                                >
                                <label class="custom-file-label" for="new-category-image">Choose file</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="new-category-top" v-model="top">
                                <label class="custom-control-label" for="new-category-top">Top</label>
                            </div>
                            <div class="custom-control custom-switch">
                                <input
                                    type="checkbox"
                                    class="custom-control-input"
                                    id="new-category-active"
                                    checked
                                    v-model="active"
                                >
                                <label class="custom-control-label" for="new-category-active">Active</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" :hidden="!isHidden">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Active</th>
                <th scope="col">Date of creation</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(product, index) in products" :key="index">
                <td class="align-middle">{{ category.id }}</td>
                <td class="align-middle">{{ category.title }}</td>
                <td class="align-middle">
                    <img :src="'../storage/' + category.image" :alt="category.title" class="category-image">
                </td>
                <td class="align-middle">
                    <svg
                        class="bi flex-shrink-0 me-2"
                        v-if="category.top"
                        width="24"
                        height="24"
                        role="img"
                        aria-label="Info:"
                    >
                        <use xlink:href="#yes"/>
                    </svg>
                    <svg class="bi flex-shrink-0 me-2" v-else width="24" height="24" role="img" aria-label="Info:">
                        <use xlink:href="#no"/>
                    </svg>
                </td>
                <td class="align-middle">
                    <svg
                        class="bi flex-shrink-0 me-2"
                        v-if="category.active"
                        width="24"
                        height="24"
                        role="img"
                        aria-label="Info:"
                    >
                        <use xlink:href="#yes"/>
                    </svg>
                    <svg class="bi flex-shrink-0 me-2" v-else width="24" height="24" role="img" aria-label="Info:">
                        <use xlink:href="#no"/>
                    </svg>
                </td>
                <td class="align-middle">{{ category.created_at | formatDate }}</td>
                <td class="align-middle">
                    <a
                        class="text-decoration-none"
                        data-bs-toggle="modal"
                        :data-bs-target="'#editCategory' + category.id"
                        @click="setOriginalValues(index)"
                    >
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#edit"/>
                        </svg>
                    </a>
                    <!-- Modal for edit category-->
                    <div
                        class="modal fade"
                        :id="'editCategory' + category.id"
                        tabindex="-1"
                        :aria-labelledby="'editCategory' + category.id + 'Label'"
                        aria-hidden="true"
                    >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form
                                    method="post"
                                    @submit.prevent="createOrUpdateCategory({title, top, active, image, id: category.id})"
                                >
                                    <div class="modal-header">
                                        <h5 class="modal-title" :id="'editCategory' + category.id + 'Label'">
                                            Edit category
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text" :id="'category-title-' + category.id">
                                            Title
                                        </span>
                                            </div>
                                            <input
                                                type="text"
                                                class="form-control"
                                                aria-label="Category title"
                                                :aria-describedby="'category-title-' + category.id"
                                                v-model="title"
                                            >
                                        </div>

                                        <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row no-gutters">
                                                <div class="col-auto">
                                                    <img
                                                        :src="'../storage/' + category.image"
                                                        :alt="category.title"
                                                        class="category-image"
                                                        :ref="'category-image-preview-' + category.id"
                                                    >
                                                </div>
                                                <div class="col">
                                                    <div class="card-body">
                                                        <div class="custom-file">
                                                            <input
                                                                type="file"
                                                                class="custom-file-input"
                                                                :id="'category-image-' + category.id"
                                                                :aria-describedby="'category-image-' + category.id"
                                                                accept="image/*"
                                                                @change="getFile"
                                                                :data-category-id="category.id"
                                                            >
                                                            <label
                                                                class="custom-file-label"
                                                                :for="'category-image-' + category.id"
                                                                :id="'category-image-title-' + category.id"
                                                            >
                                                                Choose file
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-control custom-switch">
                                            <input
                                                type="checkbox"
                                                class="custom-control-input"
                                                :id="'top-category-' + category.id"
                                                v-model="top"
                                            >
                                            <label class="custom-control-label" :for="'top-category-' + category.id">
                                                Top category
                                            </label>
                                        </div>
                                        <div class="custom-control custom-switch">
                                            <input
                                                type="checkbox"
                                                class="custom-control-input"
                                                :id="'active-category-' + category.id"
                                                v-model="active"
                                            >
                                            <label class="custom-control-label" :for="'active-category-' + category.id">
                                                Active
                                            </label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">
                                            Save changes
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <a class="text-decoration-none" @click="deleteCategory(category.id)">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                            <use xlink:href="#delete"/>
                        </svg>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import {mapGetters, mapActions} from 'vuex';
import moment from 'moment'

export default {
    data() {
        return {
            image: null,
            top: null,
            title: null,
            active: null
        }
    },

    mounted() {
        this.getCategories()
        document.getElementById('header').innerText = 'Categories'
        document.title = 'Categories'
    },

    methods: {
        ...mapActions([
            'getCategories',
            'createOrUpdateCategory',
            'deleteCategory',
        ]),

        setOriginalValues(categoryIndex = null) {
            this.title = (null === categoryIndex) ? null : this.categories[categoryIndex].title
            this.top = (null === categoryIndex) ? null : !!this.categories[categoryIndex].top
            this.active = (null === categoryIndex) ? null : !!this.categories[categoryIndex].active
        },

        getFile(event) {
            this.image = event.target.files
            this.$refs["category-image-preview-" + event.target.attributes[5].value][0].attributes[1].value = ''
            this.$refs["category-image-preview-" + event.target.attributes[5].value][0].attributes[2].value = 'display after saving'
        }
    },

    computed: {
        ...mapGetters([
            'categories'
        ]),
        isHidden() {
            return this.title
        }
    },

    filters: {
        formatDate: value => moment(String(value)).format('DD.MM.YYYY hh:mm'),
    }
}
</script>

<style scoped>
.category-image {
    height: 85px;
}
</style>
