const state = {
    category: null,
    categories: null,
}

const getters = {
    category: () => state.category,
    categories: () => state.categories,
}

const actions = {
    getCategory({commit}, id) {
        axios.get(`/api/categories/${id}`)
            .then(res => {
                commit('setCategory', res.data)
            })
    },

    getCategories({commit}) {
        axios.get('/api/categories')
            .then(res => {
                console.log(res)
                commit('setCategories', res.data)
                /*res.data.data.forEach(function (objCategory) {
                if (objCategory.active) {
                    self.allCategories.push(objCategory)
                    if (self.topCategories.length < 6) {
                        self.topCategories.push(objCategory)
                    }
                }
            })*/
            })
    },

    deleteCategory({dispatch, state}, categoryId) {
        let categories = state.categories.filter(category => category.id === categoryId)
        if (window.confirm("Do you really want to delete category «" + categories[0].title + "»?")) {
            axios.delete(`/api/categories/${categoryId}`)
                .then(() => {
                    dispatch('getCategories')
                })
        }
    },

    updateCategory({dispatch}, data) {
        console.log(data)
        let formData = new FormData();
        if (null !== data.image) {
            formData.append('image', data.image[0]);
        }
        formData.append('title', data.title);
        formData.append('top', +data.top);
        formData.append('active', +data.active);
        formData.append('_method', 'patch');

        axios.post(`/api/categories/${data.id}`, formData, {headers: {'Content-Type': 'multipart/form-data'}})
            .then(() => {
                dispatch('getCategories')
            })
    }
}

const mutations = {
    setCategory(state, category) {
        state.category = category
    },
    setCategories(state, categories) {
        state.categories = categories
    }
}

export default {
    state, actions, getters, mutations
}
