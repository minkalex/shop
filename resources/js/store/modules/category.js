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
