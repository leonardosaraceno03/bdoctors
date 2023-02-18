<template>
    <div>
      <h1>
          Pagina di dettaglio della specializzazione: {{ this.$route.params.name }}
      </h1>
      <!-- Comp TagCard -->
      <SpecializationCard/>
    </div>
  </template>

  <script>
  import SpecializationCard from '../../../components/Specializations/specializationCard.vue'

  export default {
      name: 'SpecializationShow',
      components: {
          SpecializationCard
      }
  }
  </script>

  <style>

  </style>
