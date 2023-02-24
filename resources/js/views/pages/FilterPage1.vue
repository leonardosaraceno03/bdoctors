<template>
    <div class="container">
        <h1 class="text-center pb-5 mt-5">
            Pagina di Ricerca Avanzata {{ selectedSpecName }}
        </h1>
        <div class="d-flex justify-content-center">
            <select v-model="spec" class="form-select">
                <option value="">Qualsiasi</option>
                <option v-for="spec in specializationsArray" :key="spec.id" :value="spec.id">{{ spec.name }}</option>
            </select>
            <button @click="filterDoctors" class="btn btn-primary">Filtra</button>
        </div>

        <Loader v-if="isLoading"/>

        <div v-else-if="doctors.length" class="d-flex flex-wrap justify-content-between pt-5 text-white">

            <div v-for="elem in doctors" :key="elem.user.id" class="ms-card text-center pt-3">
                <div>
                    <h5>{{elem.user.name}} {{elem.user.surname}}</h5>
                </div>
                <div>
                    <span>Specializzazione/i:
                        <span v-for="specialization in elem.specializations" :key="specialization.id">
                            {{specialization.name}}
                        </span>
                    </span>
                </div>
                <span>Indirizzo: {{elem.address}}</span>
            </div>

        </div>

        <div v-else class="text-center pt-5">
            <h4>Nessun dottore trovato per questa specializzazione</h4>
        </div>

    </div>
</template>

<script>
import Loader from '../../components/Loader.vue'
export default {
    name: 'FilterPageDue',
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
        this.spec = '';
        //this.getSpecializations();
    },
    computed: {
    selectedSpecName() {
            const spec = this.specializationsArray.find(spec => spec.id === this.spec);
            return spec ? spec.name : '';
        }
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

<style lang="scss" scoped>

    .form-select{
        width: 50%;
        display: inline-block;
        margin-right: 10px;
    }

    .ms-card{
        width: calc( 94% / 3);
        height: 200px;
        margin-bottom: 20px;
        background-color: rgba(0, 0, 0, 0.8);
        border-radius: 5px;

    }

</style>
