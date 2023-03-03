<template>

    <div>
        <div v-if="(!sponsoredDoctors.length)">
            <h4>
                Attualmente non ci sono medici in evidenza
            </h4>
        </div>
        
        <div v-else class="my-3">
            <div>
                <h2>Medici in evidenza</h2>
            </div>
            <SponsoredCardComp v-for="sponsoredDoc in sponsoredDoctors" :key="sponsoredDoc.id" :sponsoredDoc="sponsoredDoc"/>
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
              axios.get('api/sponsors')
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
