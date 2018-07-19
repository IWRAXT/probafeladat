<template>
    <div>
        <directs :name="name" :directs="directs"></directs>
    </div>
</template>

<script>
    // import Directs from 'Directs';
    export default {
        name: "DirectsList",
        props: {
            id: Number,
            name: String,
        },
        data() {
            return {
                directs: {},
            };
        },
        mounted() {
            axios.get('/getDirects/' + this.id)
                .then(response => this.directs = response.data)
                .catch(function (error) {
                    alert("ERRRORRR!!!!");
                    console.log(error);
                });
        }
    }
</script>

<style scoped>

</style>