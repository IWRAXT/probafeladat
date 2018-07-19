<template>
    <div>
        <p>{{ name }}</p>
        <ul v-show="directs.length > 0">
            <li v-for="(index, value) in directs">
                <directs :name="index" :directs="value"></directs>
            </li>
        </ul>
    </div>
</template>

<script>

    export default {
        name: "Directs",
        props: {
            name: String,
            directs: Object
        }
    }
</script>

<style scoped>

</style>