<template>
    <div>
      <h1>Cerca Medici</h1>
      <form>
        <div class="form-group">
          <label for="specialization">Specializzazione</label>
          <select id="specialization" class="form-control" v-model="specialization">
            <option value="">Tutte</option>
            <option v-for="spec in specializations" :key="spec.id" :value="spec.id">{{ spec.name }}</option>
          </select>
        </div>
        <div class="form-group">
          <label for="reviews">Recensioni</label>
          <select id="reviews" class="form-control" v-model="reviews">
            <option value="">Tutte</option>
            <option value="1">1 stella</option>
            <option value="2">2 stelle</option>
            <option value="3">3 stelle</option>
            <option value="4">4 stelle</option>
            <option value="5">5 stelle</option>
          </select>
        </div>
        <div class="form-group">
          <label for="ratings">Voti</label>
          <select id="ratings" class="form-control" v-model="ratings">
            <option value="">Tutti</option>
            <option value="1">1 voto</option>
            <option value="2">2 voti</option>
            <option value="3">3 voti</option>
            <option value="4">4 voti</option>
            <option value="5">5 voti</option>
          </select>
        </div>
        <button class="btn btn-primary" @click.prevent="searchDoctors">Cerca</button>
      </form>
      <div v-if="isLoading">
        <loader></loader>
      </div>
      <div v-else>
        <ul>
          <li v-for="doc in doctors" :key="doc.id">{{ doc.user.name }} - {{ doc.specializations.map(s => s.name).join(', ') }}</li>
        </ul>
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
    data() {
      return {
        specializations: [],
        specialization: '',
        reviews: '',
        ratings: '',
        doctors: [],
        isLoading: false,
      }
    },
    mounted() {
      this.getSpecializations()
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
        if (this.reviews) {
            params.reviews = this.reviews
        }
        if (this.ratings) {
            params.ratings = this.ratings
        }
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
