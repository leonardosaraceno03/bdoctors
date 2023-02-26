<template>
    <div>
        <h4>
            ciao, sono il CardComp
        </h4>
        {{ doc.user.name }}
    </div>
  </template>

  <script>
  export default {
      name: 'CardComp',
      props: ['doc'],
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
