<template>
    <section class="login-page pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-9 wow fadeInUp animated">
                    <div class="login-register-form"
                         style="background-image: url('/storage/images/categories/form.png');">
                        <div class="top-title text-center ">
                            <h2>edit category</h2>
                        </div>
                        <form class="common-form" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="enter category title"
                                    name="title"
                                    v-model="title"
                                >
                            </div>
                            <div>
                                <div class="wow fadeInUp animated">
                                    <div
                                        class="newsLetter-one__content-box d-flex align-items-center justify-content-md-start justify-content-center wow fadeInUp animated"
                                        data-wow-delay="0.1s"
                                    >
                                        <div class="thumb">
                                            <img :src="'/storage/' + image" alt="category_image">
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
                                    </div>
                                </div>
                            </div>
                            <div class="checkk ">
                                <div class="form-check p-0 m-0">
                                    <input type="checkbox" id="active" checked name="active" v-model="active" value="1">
                                    <label class="p-0" for="active">
                                        is active
                                    </label>
                                </div>
                            </div>
                            <button type="button" class="btn--primary style2" @click="update">save</button>
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
            image: null,
            active: true,
        }
    },

    mounted() {
        this.getCategory()
    },

    methods: {
        getFile(event) {
            this.image = event.target.files
        },
        getCategory() {
            axios.get(`/categories/${this.$route.params.id}`)
                .then(res => {
                    this.title = res.data.title
                    this.image = res.data.image
                    this.active = Boolean(res.data.active)
                })
        },
        update() {
            let formData = new FormData();
            if (null !== this.image && this.image.length > 0) {
                formData.append('image', this.image[0]);
            }
            formData.append('title', this.title);
            formData.append('active', +this.active);
            formData.append('_method', 'patch');
            axios.post(
                `/categories${this.$route.params.id}`,
                formData,
                {headers: {'Content-Type': 'multipart/form-data'}}
            ).then(res => {
                this.$router.push({name: 'categories.show', params: {id: this.$route.params.id}})
            })
            .catch(e => {
                console.log(e)
            })
        }
    }
}
</script>

<style scoped>

</style>
