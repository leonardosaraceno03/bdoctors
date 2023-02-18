<template>
    <div>
      <Loader v-if="isLoading"/>
              <ul v-else-if="specializations.length">
                 <li v-for="elem in specializations" :key="elem.id">

                      <router-link :to="`/specializations/${elem.name}`">
                      <!-- <router-link :to"'/tags/${elem.id}'"> -->
                          {{ elem.name }}
                      </router-link>

                  </li>
              </ul>
              <p v-else>
                  non ci sono specializzazioni da visualizzare
              </p>

              <!-- paginazione -->
              <!-- <Pagination @on-page-change="gettags" :pagination="pagination"/> -->
          </div>
  </template>

  <script>

  import Loader from '../Loader.vue'
  //import Pagination from '../Pagination.vue'

  export default {
      name: 'SpecializationsList',
      // props: ['tags', 'isLoading', 'pagination'],
      components: {
          Loader
          //Pagination
      },
      data(){
          return{
              specializations: [],
              isLoading: false
              //pagination: {}
          }
      },
      mounted(){
          this.getSpecializations();
      },
      methods: {
          getSpecializations(){
              this.isLoading = true;
              axios.get('http://localhost:8000/api/specializations')
                  .then( (res) => {
                      console.log(res.data);

                      this.specializations = res.data;


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

  <style scooped lang="scss">

  </style>
