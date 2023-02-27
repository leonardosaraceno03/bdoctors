<template>
    <div class="ms-card bg-light rounded my-3 p-3">
        <router-link :to="`/doctors/${doc.id}`">
            <h5>{{ doc.user.name }} - {{ doc.user.surname }}</h5>
        
            <div v-for="spec in doc.specializations" :key="spec.id">
                <h6>{{ spec.name }}</h6>
            </div>
        </router-link> 
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

  <style lang="scss" scoped>
    .ms-card{
        width: calc(94% / 3);
    }

    a{
        text-decoration: none;
        color: inherit;
    }
  </style>
