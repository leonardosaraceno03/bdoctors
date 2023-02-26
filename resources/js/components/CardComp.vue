<template>
    <div>
        <h4>
            ciao, sono il CardComp
        </h4>
        {{ doc.user.name }} - {{ doc.user.surname }}
        <div v-for="spec in doc.specializations" :key="spec.id">
            specializzato in {{ spec.name }}
        </div>
    </div>
  </template>

  <script>
  export default {
      name: 'CardComp',
      props: ['doc', 'specializations'],
      components: {

      },
      data() {
          return {

          }
      },
      mounted() {

      },
      methods: {

      }
  }
  </script>

  <style>

  </style>
