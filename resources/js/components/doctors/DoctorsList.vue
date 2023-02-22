<template>
  <div>

    <h1>
        Ciao, sono il componente DOCTORS LIST
    </h1>

    <Loader v-if="isLoading"/>
            <ul v-else-if="doctors.length">
               <li v-for="elem in doctors" :key="elem.id">

                    <router-link :to="`/doctors/${elem.id}`">
                    <!-- <router-link :to"'/posts/${elem.id}'"> -->
                        {{ elem.user_id }}
                    </router-link>

                </li>
            </ul>
            <p v-else>
                non ci sono post da visualizzare
            </p>

            <!-- paginazione -->
            <Pagination @on-page-change="getDoctors" :pagination="pagination"/>

  </div>
</template>

<script>


import Loader from '../Loader.vue'
import Pagination from '../Pagination.vue'

export default {
 name: 'DoctorsList',
 components: {
        Loader,
        Pagination
    },
    data(){
        return{
            doctors: [],
            isLoading: false,
            pagination: {}
        }
    },
    mounted(){
        this.getDoctors();
    },
    methods: {
        getDoctors(){
            this.isLoading = true;
            axios.get('http://localhost:8000/api/doctors')
                .then( (res) => {
                    console.log(res.data);

                    this.doctors = data;

                }).catch(err => {
                    console.log(err);
                }).then(() => {
                    this.isLoading = false;
                    console.log(this.doctors)
                });

        }
    }
}
</script>

<style>

</style>
