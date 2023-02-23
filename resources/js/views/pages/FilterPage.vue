<template>
    <div>
        <Loader v-if="isLoading"/>
        <h1>filterpage</h1>
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