<template>
  <div class="d-flex flex-wrap justify-content-between mt-5">

    <CardComp v-for="doc in doctors" :key="doc.id" :doc="doc" :specializations="specializations"/>


  </div>
</template>

<script>
import CardComp from './CardComp.vue'
export default {
    name: 'CardsContainer',
    props: ['doctors', 'specializations'],
    components: {
        CardComp
    },
    data() {
        return {
            //selectedDoctor: "",
            //doctors: [],
            //specializations: [],
        }
    },
    mounted() {
        //this.getDoctors();

    },
    methods: {
        getDoctors(){
            axios.get('api/doctors')
            .then((res) => {
                console.log('doctors', res.data)
                this.doctors = res.data
            })
            .catch(err => console.error(err))
        }
    }
}
</script>

<style lang="scss" scoped>



</style>
