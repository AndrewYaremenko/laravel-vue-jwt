<template>
    <div>
        <router-link :to="{ name: 'fruits.index' }">List</router-link>
        <router-view></router-view>
    </div>
</template>
<script>
export default {
    name: "Index"
}
</script>
<style>
    
</style>