<template>

    <div class="my-4 ">
        <div v-if="(!sponsoredDoctors.length)" class="text-primary text-center">
            <h4>
                Attualmente non ci sono medici in evidenza
            </h4>
        </div>
        
        <div v-else class="my-3">
            <div>
                <h2 class="text-primary text-center">Medici in evidenza</h2>
            </div>
            <div class="d-flex flex-wrap mt-5 container"> 
                <div class="row w-100">
                    <div class="d-flex flex-wrap">
                        <SponsoredCardComp v-for="sponsoredDoc in sponsoredDoctors" :key="sponsoredDoc.id" :sponsoredDoc="sponsoredDoc" class="classe-prova col-lg-4 col-md-6 col-sm-12  mt-5 " />
                    </div> 
                </div>
            </div>
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

        .classe-prova{
            gap: 20px;
        }


  </style>
