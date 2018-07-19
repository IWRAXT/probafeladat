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
            id: Object,
            name: String,
        },
        data() {
            return {
                directs: {},
            };
        },
        mounted() {
            window.axios.get('/getDirects/' + id)
                .then(function (response) {
                    this.directs = response.data;
                })
                .catch(function (error) {
                    alert("ERRRORRR!!!!");
                    console.log(error);
                });
        }
    }
</script>

<style scoped>

</style>