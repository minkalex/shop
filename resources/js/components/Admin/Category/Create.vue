<template>
    <section class="login-page pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-9 wow fadeInUp animated">
                    <div class="login-register-form"
                         style="background-image: url('../storage/images/categories/form.png');">
                        <div class="top-title text-center ">
                            <h2>new category</h2>
                        </div>
                        <form class="common-form" method="post" enctype="multipart/form-data" @submit.prevent="store">
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="enter category title"
                                    name="title"
                                    v-model="title"
                                    required
                                >
                            </div>
                            <div>
                                <input
                                    type="file"
                                    class="form-control form-control-lg"
                                    name="image"
                                    accept="image/*"
                                    @change="getFile"
                                >
                                <div id="emailHelp" class="form-text">preferably *.png 95x85</div>
                            </div>
                            <div class="checkk ">
                                <div class="form-check p-0 m-0">
                                    <input type="checkbox" id="active" checked name="active" v-model="active" value="1">
                                    <label class="p-0" for="active">
                                        is active
                                    </label>
                                </div>
                            </div>
                            <button type="submit" :hidden="!isHidden" class="btn--primary style2">add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {

    data() {
        return {
            title: null,
            image: [],
            active: true,
        }
    },

    methods: {
        getFile(event) {
            this.image = event.target.files
        },

        store() {
            let formData = new FormData();
            if (this.image.length > 0) {
                formData.append('image', this.image[0]);
            }
            formData.append('title', this.title);
            formData.append('active', +this.active);
            axios.post(
                '/categories',
                formData,
                {headers: {'Content-Type': 'multipart/form-data'}}
            ).then(res => {
                this.$router.push({ name: 'categories.index' })
            })
        }
    },

    computed: {
        isHidden() {
            return this.title
        }
    }
}
</script>
