<template>
    <div>
      <h1>
          CARD FRONT DELLA SINGOLA SPECIALIZZAZIONE
      </h1>
      <!-- stampare la lista dei dottori di questa precisa specializzazione -->

        <div v-for="elem in specialization" :key="elem.name">
            <ul>
                <li v-for="doctor in elem.doctors" :key="doctor.id">
                    {{ doctor.name }}
                </li>
            </ul>
        </div>

    </div>
  </template>

  <script>
  export default {
      name: 'SpecializationCard',
      components: {

      },
      data(){
          return{
              //post: null,
              specialization: []
          }
      },
      mounted(){
          this.getSpecialization();
      },
      methods: {
          getSpecialization(){
              //this.isLoading = true;
              axios.get('http://localhost:8000/api/specializations/' + this.$route.params.name)
                  .then( (res) => {
                      console.log(res.data);

                      this.specialization = res.data;

                  }).catch(err => {
                      console.log(err);
                  });
                  // }).then(() => {
                  //     this.isLoading = false;
                  // });

          }
      }
  }
  </script>

  <style>

  </style>
