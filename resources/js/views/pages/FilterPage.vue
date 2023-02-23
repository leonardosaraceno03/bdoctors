<template>
    <div>
        <h1>
            PAGINA DEI DOTTORI PER SPECIALIZZAZIONE
            <!-- ECCOTI NELLA PAGINA DI : {{ specializationsArray.id }} !! -->
        </h1>

        <Loader v-if="isLoading"/>

        <div v-else-if="doctors.length">

            <!-- lista dei medici per specializazzione -->
            <span v-for="elem in doctors" :key="elem.user.id">
                {{ elem.user.name }}
            </span>
        </div>
    </div>
</template>

<script>
import Loader from '../../components/Loader.vue'
export default {
    name: 'FilterPage',
    components: {
        Loader,
    },
    data(){
        return {
            isLoading: false,
            doctors: [],
            specializationsArray: [],
            spec: this.$route.params.selectedSpec,
        }
    },
    mounted() {
        this.filterDoctors();
        //this.getSpecializations();
    },
    methods: {

        filterDoctors(){
            this.isLoading = true;
            axios.post("http://localhost:8000/api/doctors", {
                specialization: this.spec,
            }).then((res) =>{
                console.log(res.data);
                this.doctors = res.data.doctors;
                this.specializationsArray = res.data.specializations;

            }).catch((err) => {
                console.log(err);
            }).then(() => {
                this.isLoading = false;
            });
        }



    }
}
</script>

<style>

</style>
