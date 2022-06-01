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
                commit('setCategories', res.data)
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

    createOrUpdateCategory({dispatch}, data) {
        let formData = new FormData();
        if (null !== data.image) {
            formData.append('image', data.image[0]);
        }
        formData.append('title', data.title);
        formData.append('top', +data.top);
        formData.append('active', +data.active);
        let url = `/api/categories`
        if (typeof data['id'] !== "undefined") {
            formData.append('_method', 'patch');
            url += `/${data.id}`
        }
        axios.post(url, formData, {headers: {'Content-Type': 'multipart/form-data'}})
            .then(res => {
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
