<template>
    <div>
      <h1>
          CARD FRONT DEL SINGOLO DOTTORE
      </h1>
      {{ user.id }}
      <!-- {{ doctor.body }} -->
    </div>
  </template>

  <script>
  export default {
      name: 'DoctorCard',
      components: {

      },
      data(){
          return{
              doctor: null,
          }
      },
      mounted(){
          this.getDoctor();
      },
      methods: {
          getDoctor(){
              //this.isLoading = true;
              axios.get('http://localhost:8000/api/doctors/' + this.$route.params.id)
                  .then( (res) => {
                      console.log(res.data);

                      this.doctor = res.data;

                  }).catch(err => {
                      console.log(err);
                  });

          }
      }
  }
  </script>

  <style>

  </style>
