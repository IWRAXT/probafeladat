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


            <div class="panel-heading">People list</div>

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Born</th>
                        <!--<th width="100">&nbsp;</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="person in people">
                        <td>{{person.id}}</td>
                        <td>{{ person.name }}</td>
                        <td>{{ person.email }}</td>
                        <td>{{ person.born }}</td>

                        <!--<td>-->
                            <!--<router-link :to="{name: 'editPerson', params: {id: person.id}}" class="btn btn-xs btn-default">-->
                                <!--Edit-->
                            <!--</router-link>-->
                            <!--<a href="/people/{id}/edit"-->
                               <!--class="btn btn-xs btn-danger"-->
                               <!--v-on:click="deleteEntry(person.id, index)">-->
                                <!--Delete-->
                            <!--</a>-->

                        <!--</td>-->
                    </tr>
                    </tbody>
                </table>

    </div>

</template>

<script>

     export default {
          data(){
          return {people:[]}
        },
        mounted(){
                window.axios.get('/people')
                    .then(response => this.people=response.data);
            }
                    // .catch(function (error) {
                    //     console.log(error);
                    // });

    }

</script>
<style scoped></style>