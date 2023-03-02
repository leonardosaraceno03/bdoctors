<template>

    <div>
        <div v-if="(!sponsoredDoctors.length)">
            <h4>
                ATTUALMENTE NON CI SONO MEDICI IN EVIDENZA
            </h4>
        </div>
        <div v-else class="d-flex flex-wrap justify-content-between mt-5">
            <SponsoredCardComp v-for="sponsoredDoc in sponsoredDoctors" :key="sponsoredDoc.id" :sponsoredDoc="sponsoredDoc" :specializations="specializations"/>
        </div>
    </div>

  </template>

  <script>
  import SponsoredCardComp from './SponsoredCardComp.vue'
  export default {
      name: 'SponsoredCardsContainer',
      //props: ['specializations'],
      components: {
          SponsoredCardComp
      },
      data() {
          return {
              //selectedDoctor: "",
              sponsoredDoctors: [],
              //specializations: [],
          }
      },
      mounted() {
          this.getSponsoredDoctors();

      },
      methods: {
          getSponsoredDoctors(){
              axios.get('api/doctors')
              .then((res) => {
                  console.log('sponsored doctors', res.data)
                  this.sponsoredDoctors = res.data;
              })
              .catch(err => console.error(err))
          }
      }
  }
  </script>

  <style lang="scss" scoped>



  </style>
