<template>
    <div>
        <div>
            <input type="text" v-model="name" placeholder="nome" />
            <input type="text" v-model="surname" placeholder="cognome" />
            <textarea v-model="body"></textarea>
            <button type="button" @click="sendReview">INVIA</button>
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
