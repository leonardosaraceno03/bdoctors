<template>
  <div>
    <h1>
        Ciao sono la HOME PAGE
    </h1>
    <Loader/>
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
