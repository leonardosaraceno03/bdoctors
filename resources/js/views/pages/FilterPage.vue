<template>
    <div>
      <label for="specialization-filter">Specialization:</label>
      <select id="specialization-filter" v-model="specializationFilter">
        <option value="">All</option>
        <option v-for="specialization in specializations" :key="specialization.id" :value="specialization.id">{{ specialization.name }}</option>
      </select>

      <label for="reviews-filter">Reviews:</label>
      <select id="reviews-filter" v-model="reviewsFilter">
        <option value="">All</option>
        <option value="1">1+</option>
        <option value="2">2+</option>
        <option value="3">3+</option>
        <option value="4">4+</option>
        <option value="5">5+</option>
      </select>

      <label for="ratings-filter">Ratings:</label>
      <select id="ratings-filter" v-model="ratingsFilter">
        <option value="">All</option>
        <option value="1">1+</option>
        <option value="2">2+</option>
        <option value="3">3+</option>
        <option value="4">4+</option>
        <option value="5">5+</option>
      </select>

      <button @click="applyFilters">Apply Filters</button>

      <div v-if="filteredDoctors.length > 0">
        <h2>Results:</h2>
        <ul>
          <li v-for="doctor in filteredDoctors" :key="doctor.id">
            {{ doctor.name }} ({{ doctor.specializations.map(s => s.name).join(', ') }})
            <div>Reviews: {{ doctor.reviews_count }} ({{ doctor.average_rating }}/5)</div>
          </li>
        </ul>
      </div>

      <div v-else>
        <p>No results found.</p>
      </div>
    </div>
  </template>

<script>
//import Loader from '../../components/Loader.vue'

//import axios from 'axios';

export default {
    name: 'FilterPage',
    components: {
        //Loader,
    },
    data() {
      return {
        specializations: [],
        specializationFilter: '',
        reviewsFilter: '',
        ratingsFilter: '',
        doctors: [],
      }
    },
    mounted() {
      // Load the specializations
      axios.get('/api/specializations')
        .then(response => {
          this.specializations = response.data;
        });

      // Load all the doctors
      axios.get('/api/doctors')
        .then(response => {
          this.doctors = response.data;
        });
    },
    computed: {
      filteredDoctors() {
        let filtered = this.doctors;

        // Filter by specialization
        if (this.specializationFilter) {
          filtered = filtered.filter(doctor => {
            return doctor.specializations.some(spec => spec.id === parseInt(this.specializationFilter));
          });
        }

        // Filter by reviews
        if (this.reviewsFilter) {
          filtered = filtered.filter(doctor => {
            return doctor.reviews_count >= parseInt(this.reviewsFilter);
          });
        }

        // Filter by ratings
        if (this.ratingsFilter) {
          filtered = filtered.filter(doctor => {
            return doctor.average_rating >= parseInt(this.ratingsFilter);
          });
        }

        return filtered;
      }
    },
    methods: {
      applyFilters() {
        const filters = {};
        if (this.specializationFilter) {
          filters.specialization = this.specializationFilter;
        }
        if (this.reviewsFilter) {
          filters.reviews = this.reviewsFilter;
        }
        if (this.ratingsFilter) {
            filters.ratings = this.ratingsFilter;
        }

        const query = Object.keys(filters)
            .map(key => `${encodeURIComponent(key)}=${encodeURIComponent(filters[key])}`)
            .join('&');

        const url = `/doctors/filter?${query}`;
        this.$router.push(url);
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
