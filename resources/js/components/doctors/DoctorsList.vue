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
        getDoctors(page){
            this.isLoading = true;
            axios.get('http://localhost:8000/api/doctors?page=' + page)
                .then( (res) => {
                    console.log(res.data);
                    //this.posts = res.data;
                    //dopo il PAGINATE nel Controller
                    //this.posts = res.data.data;
                    //qua possiamo indicare se lo stato è cambiato o meno


                    // destrutturizzazione
                    const { data, current_page, last_page } = res.data;

                    //const data = res.data.data;
                    //const current_page = res.data.current_page;
                    //const last_page = res.data.last_page;

                    this.doctors = data;

                    this.pagination = {
                        lastPage: last_page,
                        currentPage: current_page
                    };



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
