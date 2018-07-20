<template>
    <div>
        <directs :name="name" :directs="directs"></directs>
    </div>
</template>

<script>
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
                    alert("Hiba történt a beosztottak kiiratásában!");
                    console.log(error);
                });
        }
    }
</script>

<style scoped>

</style>