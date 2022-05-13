<template>
    <div>
        <p>
            <router-link :to="{ name: 'categories.index' }">categories</router-link>
            <router-link :to="{ name: 'categories.create' }">add category</router-link>
            <router-link :to="{ name: 'categories.edit', params: {id: 5} }">edit category</router-link>
        </p>
        <router-view></router-view>
    </div>
</template>

<script>
export default {

}
</script>
