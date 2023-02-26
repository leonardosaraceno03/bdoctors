<template>
  <div>
    <h3>
        ciao, sono il CardsContainer
    </h3>

    <router-link
        v-for="doc in doctors" :key="doc.id"
        :to="{
            name: 'show',
            params: {
                selectedDoctor: doc.id
            }
        }"
        >
            <CardComp
                :doc="doc"
                :specializations="specializations"
            />
    </router-link>

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

<style>

</style>
