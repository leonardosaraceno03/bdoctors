<template>
    <div class="container align-items-center h-100">
        <h1 class="text-center pb-5 mt-5">
            Home Page
        </h1>

        <div class="d-flex justify-content-center">
            <select v-model="selectedSpecialization" class="form-select">
                <option value="" selected>Qualsiasi</option>
                <option v-for="elem in specializationsArray" :key="elem.id " :value="elem.id">

                {{  elem.name  }}

                </option>
            </select>
            <router-link
            class="btn btn-primary d-inline" 
            :to="{
                name: 'doctors',
                params: {
                    selectedSpec: selectedSpecialization
                }
                }">
                Cerca
            </router-link>
        
        </div>

        

    </div>
</template>

<script>
import Loader from '../../components/Loader.vue'
export default {
    name: 'HomePage',
    components: {
        Loader,
    },
    data(){
        return {
            specializationsArray: [],
            selectedSpecialization: "",
            isLoading: false,
        }
    },
    mounted() {
        this.getSpecializations();
    },
    methods: {
        //step2 - in questa pagina dobbiamo effettuare la chiamata Axios
        //per ciclare le Specializzazioni
        getSpecializations(){
            this.isLoading = true;
            axios.get("http://localhost:8000/api/doctors/")
            .then((res) => {
                console.log('questo è res.data', res.data);
                this.specializationsArray = res.data;
            })
            .catch((err) => {
                console.log(err);
            })
            .then(() => {
                this.isLoading = false;
            })
        },


    }
}
</script>

<style lang="scss" scoped>
    
    .form-select{
        width: 50%;
        display: inline-block;
        margin-right: 10px;
    }

</style>
