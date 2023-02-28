<template>
    <div class="container">
      <h1 class="my-5 text-center">Cerca Medici</h1>

      <div class="row">

          <div class="col-12 col-md-4">
            <div class="form-group">
              <label for="specialization" class="mb-2">Specializzazione</label>
              <select id="specialization" class="form-control" v-model="specialization">
                <option value="">Tutte</option>
                <option v-for="spec in specializations" :key="spec.id" :value="spec.id">{{ spec.name }}</option>
              </select>
            </div>
          </div>

          <div class="col-12 col-md-4">
            <div class="form-group">
              <label for="min_reviews" class="mb-2">Minimo Numero di Recensioni</label>
              <select id="min_reviews" class="form-control" v-model="min_reviews">
                <option value="">Tutte</option>
                <option value="1">1 recensioni</option>
                <option value="2">2 recensioni</option>
                <option value="3">3 recensioni</option>
                <option value="4">4 recensioni</option>
                <option value="5">5 recensioni</option>
              </select>
            </div>
          </div>

          <div class="col-12 col-md-4">
            <div class="form-group">
              <label for="min_rating" class="mb-2">Minima Valutazione</label>
              <select id="min_rating" class="form-control" v-model="min_rating">
                <option value="">Tutte</option>
                <option value="1">1 stella</option>
                <option value="2">2 stelle</option>
                <option value="3">3 stelle</option>
                <option value="4">4 stelle</option>
                <option value="5">5 stelle</option>
              </select>
            </div>
          </div>

        </div>
        <div class="d-flex justify-content-center mt-3">
          <button class="btn btn-primary mt-3 w-25" @click.prevent="searchDoctors">Cerca</button>
        </div>

      <div v-if="isLoading">
        <loader></loader>
      </div>
      <div v-else-if="this.doctors.length > 0">

        <CardsContainer :doctors="doctors" :specializations="specializations"/>

      </div>
      <div v-else class="d-flex justify-content-center pt-5">
        <h2>Nessun elemento trovato</h2>
      </div>

    </div>
</template>

<script>
import Loader from '../../components/Loader.vue'
import CardsContainer from '../../components/CardsContainer.vue'
  export default {
    name: 'FilterPage',
    components: {
      Loader,
      CardsContainer
    },
    data() {
      return {
        specializations: [],
        specialization: this.$route.params.selectedSpec,
        min_reviews: '',
        min_rating: '',
        doctors: [],
        isLoading: false,
      }
    },
    mounted() {
      this.getSpecializations();
      this.searchDoctors();
      this.specialization = '';
    },
    methods: {
      getSpecializations() {
        this.isLoading = true
        axios.get('/api/specializations')
          .then(res => {
            this.specializations = res.data
          })
          .catch(err => console.error(err))
          .finally(() => {
            this.isLoading = false
          })
      },
    searchDoctors() {
        let query = '/api/doctors'
        let params = {}
        if (this.specialization) {
          params.specialization = this.specialization
        }
        if (this.min_reviews) {
          params.min_reviews = this.min_reviews
        }
        if (this.min_rating) {
          params.min_rating = this.min_rating
        }
        console.log(params.specialization);
        console.log(params.min_reviews);
        console.log(params.min_rating);
        // aggiungi i parametri all'URL per visualizzare i filtri nell'indirizzo
        let queryParams = new URLSearchParams(params)
        history.replaceState(null, '', '?' + queryParams.toString())



        // aggiungi la gestione dell'errore
        this.isLoading = true
        axios.get(query, { params })
            .then(res => {
            this.doctors = res.data
            })
            .catch(err => {
            console.error(err)
            this.doctors = []
            })
            .finally(() => {
            this.isLoading = false
            })
    }

  },
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
