<template>
    <div class="py-5">
        
        <h3 class="mb-3">Lascia una recensione</h3>

        <div class="row">
            <div class="col-6 pt-3">
                <input type="text" v-model="name" placeholder="Nome" class="input-group form-control"/>
            </div>
            <div class="col-6 pt-3">
                <input type="text" v-model="surname" placeholder="Cognome" class="input-group form-control"/>
            </div>
            <div class="col-12 pt-3">
                <textarea v-model="body" class="form-control" placeholder="Messaggio"></textarea>
            </div>
        </div>
        <div class="pt-3">
            <button type="button" class="btn btn-primary" @click="sendReview">Invia Recensione</button>
        </div>
    </div>
</template>

<script>
  export default {
      name: 'LetReview',
      components: {

      },
      data() {
          return {
            name: "",
            surname: "",
            body: ""
          }
      },
      mounted() {

      },
      methods: {
        sendReview(){
            axios.post('/api/review', {
                name: this.name,
                surname: this.surname,
                body: this.body,
                doctor_id: this.$route.params.id
            })
            .then((res) => {
                console.log(res.data)
            })
            .catch(err => 
                console.error(err))
            .finally(() => {
                this.name = "",
                this.surname = "",
                this.body = ""
            })
        }
      }
  }
  </script>

  <style>

  </style>
