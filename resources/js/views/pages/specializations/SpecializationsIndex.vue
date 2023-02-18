<template>
    <div>
      <h1>
          pagina delle specializzazioni
      </h1>
      <!-- comp lista tags -->
      <SpecializationsList/>

    </div>
  </template>

  <script>
  import SpecializationsList from '../../../components/specializations/SpecializationsList.vue'

  export default {
      name: 'SpecializationsIndex',
      components: {
          SpecializationsList
      }
  }
  </script>

  <style>

  </style>
