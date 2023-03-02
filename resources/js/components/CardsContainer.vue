<template>
  <div>
    <div>
        
        <SponsoredCardComp v-for="sponsoredDoc in sponsoredDoctors" :key="sponsoredDoc.id" :sponsoredDoc="sponsoredDoc" :specializations="specializations"/>

    </div>
    <div class="d-flex flex-wrap justify-content-between mt-5">

    
    <CardComp v-for="doc in doctors" :key="doc.id" :doc="doc" :specializations="specializations"/>


  </div>
  </div>
  
</template>

<script>
import CardComp from './CardComp.vue'
import SponsoredCardComp from './SponsoredCardComp.vue'

export default {
    name: 'CardsContainer',
    props: ['doctors', 'sponsoredDoctors', 'specializations'],
    components: {
        CardComp,
        SponsoredCardComp
    },
    data() {
        return {
            //selectedDoctor: "",
            // sponsoredDoctors: [],
            //specializations: [],
        }
    },
    mounted() {
        // this.getSponsoredDoctors();
        this.getDoctors();
    },
    methods: {
        getDoctors(){
            
            
                
                console.log(this.doctors);
            
            
        },

        // getSponsoredDoctors(){
        //       axios.get('api/sponsors')
        //       .then((res) => {
        //           console.log('sponsored doctors', res.data)
        //           this.sponsoredDoctors = res.data;
        //       })
        //       .catch(err => console.error(err))
        //   },

        //   getDoctors(){
        //     axios.get('api/doctors')
        //     .then((res) => {
        //         console.log('doctors', res.data)
        //         this.doctors = res.data
        //         console.log(this.doctors);
        //     })
        //     .catch(err => console.error(err))
        // },
    }
}
</script>

<style lang="scss" scoped>



</style>
