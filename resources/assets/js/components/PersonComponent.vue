<template>
    <div>
        <div class="col-lg-12">
            <div class="panel panel-default">

                <h1>Dolgozók listája</h1>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th width="150">Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Born</th>
                            <th width="240"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="person in people">
                            <td>{{person.id}}</td>
                            <td><img :src="'/images/'+person.image"></td>
                            <td>{{ person.name }}</td>
                            <td>{{ person.email }}</td>
                            <td>{{ person.born }}</td>

                            <td>
                                <button id="show-modal" @click="person.showModal = true"
                                        class="edit-modal btn btn-outline-secondary">Directs
                                </button>


                                <modal v-if="person.showModal" @close="person.showModal = false">

                                    <h3 slot="header">{{person.name}} beosztottjai:</h3>
                                    <p slot="body">
                                        <directsList :id="person.id" :name="person.name"></directsList>
                                    </p>

                                </modal>

                                <a :href="'/people/'+person.id+'/edit'" class="btn btn-xs btn-secondary">Edit</a>

                                <button class="edit-modal btn btn-danger" @click.prevent="deletePerson(person)">Delete
                                </button>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</template>

<script>

    export default {
        data() {
            return {
                people: []
            }
        },

        mounted() {
            axios.get('/people')
                .then(response => {
                    let people = response.data
                    people.map(person => {
                        person.showModal = false
                        return person
                    })
                    this.people = people
                })


                .catch(function (error) {
                    alert("Hiba történt az oldal betöltése során!");
                    console.log(error);
                });
        },
        methods: {


            deletePerson: function (person) {

                let conf = confirm("Tényleg törli a dolgozót?");
                if (conf === true) {

                    axios.post('/people/' + person.id)
                        .then(response => this.people = response.data)
                        //  then(function () {
                        //      this.people=this.people.splice(person.id,1);}


                        .catch(function (error) {
                                alert("Nem sikerült törölni!");
                                console.log(error);

                            }
                        )
                    ;


                }

            },

        }

    }

</script>
<style scoped>
    img {
        width: 150px;
        height: 150px;
        float: left;
        border-radius: 50%;
        margin-right: 25px;
    }

    th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #838383;
        color: white;
    }

    td {

        /*vertical-align: center;*/
    }
</style>