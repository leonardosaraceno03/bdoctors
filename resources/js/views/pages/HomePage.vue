<template>
    <div>
        <h1>
            Ciao sono la HOME PAGE
        </h1>

        <Loader v-if="isLoading"/>

        <select v-else-if="specializationsArray.length" v-model="selectedSpecialization" >
            <option value="" selected>Seleziona una specializzazione</option>
            <option v-for="elem in specializationsArray" :key="elem.id " :value="elem.id">

                {{  elem.name  }}

            </option>
        </select>

        <p v-else>
            non ci sono specializzazioni da visualizzare
        </p>

        <router-link 
            class="btn btn-primary" 
            :to="{
                name: 'doctors',
                params: {
                    selectedSpec: selectedSpecialization
                }
            }">
                Cerca
        </router-link>

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
            axios.get("http://localhost:8000/api/doctors")
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

<style>

</style>
