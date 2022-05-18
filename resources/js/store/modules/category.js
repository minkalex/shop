const state = {
    category: null
}

const getters = {
    category: state => state.category
}

const actions = {
    getCategory(commit, id) {
        console.log('sad')
        axios.get(`/categories/${id}`)
            .then(res => {
                console.log('sasdfsdfdsfd')
                commit('setCategory', res.data)
            })
            .catch(error => {
                console.log(error)
            })
    }
}

const mutations = {
    setCategory(state, category) {
        state.category = category
    }
}

export default {
    state, actions, getters, mutations
}
