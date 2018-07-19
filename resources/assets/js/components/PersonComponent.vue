<!--<template>-->
    <!--<div>-->
            <!--<h1>Persönök</h1>-->
    <!--</div>-->
<!--</template>-->

<!--<script>-->
    <!--export default {-->
        <!--name: "PersonComponent"-->
    <!--}-->
<!--</script>-->

<!--<style scoped>-->
<!--</style-->


<template>
    <div>
        <!--<div class="form-group">-->
            <!--<router-link :to="{name: 'createPerson'}" class="btn btn-success">Add new person</router-link>-->
        <!--</div>-->


        <div class="panel panel-default">
            <h1>Person list</h1>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Born</th>
                        <th width="250">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(person,index) in people">
                        <td>{{person.id}}</td>
                        <td>{{ person.name }}</td>
                        <td>{{ person.email }}</td>
                        <td>{{ person.born }}</td>

                        <td>
                            <!--https://stackoverflow.com/questions/40899532/how-to-pass-a-value-from-vue-data-to-href-->
                            <a :href="'/people/'+person.id+'/edit'" class="btn btn-xs btn-secondary">Edit</a>


                            <!--<button @click="deletePerson(person.id)" class="btn btn-danger btn-xs">Delete</button>-->

                            <button class="edit-modal btn btn-danger" @click.prevent="deletePerson(person)">
                                <span class="glyphicon glyphicon-trash"></span> Delete
                            </button>


                             <!--<button @click="PrintDirectList(person.id,person.name)" class="btn btn-xs btn-outline-secondary" >Directs</button>-->

                            <directsList :id="person.id" :name="person.name"></directsList>



                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>


</template>

<script>
    // import Directs from 'Directs';
    // import DirectsList from 'DirectsList';
    import axios from 'axios';

     export default {
          data(){
          return {people:[]}
          },

          mounted(){
                axios.get('/people')
                    .then(response => this.people=response.data);
          },
                    // .catch(function (error) {
                    //     console.log(error);
                    // });
         methods: {


             deletePerson: function(person) {

                     let conf = confirm("Do you ready want to delete person?");
                     if (conf === true) {

                         axios.post('/people/' + person.id)
                             .then(response => this.people=response.data);


                     }

                 // deletePerson: function (person) {
                 //     //   if(count(this.people(person.id).subalterns) === 0){
                 //     let conf = confirm("Do you ready want to delete person?");
                 //     if (conf === true) {
                 //
                 //         axios.post('/people/' + person.id)
                 //             .then(response => {
                 //
                 //                 this.people.splice(person.id,1);
                 //                 console.log(deletedScores);
                 //
                 //
                 //             })
                 //
                 //
                 //             .catch(function (error) {
                 //                 alert("ERRRORRR!!!!");
                 //                 console.log(error);
                 //             });
                 //     }
                 //
                 //     // }else{
                 //     //     alert('Van felettese nem lehet törölni');
                 //     //     console.log(error);
                 //     // }


                 }

         }


     }

</script>
<style scoped></style>