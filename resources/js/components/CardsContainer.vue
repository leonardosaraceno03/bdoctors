<template>
  <div class="d-flex flex-wrap justify-content-between mt-5">

    <div
    v-if="(sponsoredDoctors.length != 0)">
        <SponsoredCardComp v-for="sponsoredDoc in sponsoredDoctors" :key="sponsoredDoc.id" :sponsoredDoc="sponsoredDoc" :specializations="specializations"/>

    </div>
    <CardComp v-for="doc in doctors" :key="doc.id" :doc="doc" :specializations="specializations"/>


  </div>
</template>

<script>
import CardComp from './CardComp.vue'
import SponsoredCardComp from './SponsoredCardComp.vue'

export default {
    name: 'CardsContainer',
    props: ['doctors', 'specializations'],
    components: {
        CardComp,
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
        getDoctors(){
            axios.get('api/doctors')
            .then((res) => {
                console.log('doctors', res.data)
                this.doctors = res.data
            })
            .catch(err => console.error(err))
        },

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
