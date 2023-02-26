<template>
    <div>
        <form v-on:submit="letReview">
            <input type="text" v-model="name" placeholder="nome" />
            <input type="text" v-model="surname" placeholder="cognome" />
            <textarea name="body" v-model="body"></textarea>
            <button type="submit">INVIA</button>
        </form>
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
        letReview(){
            axios.post('/api/message', {
                name: this.name,
                surname: this.surname,
                body: this.body,
                doctor_id: this.$route.params.id
            })
            .then((res) => {
                console.log(res.data)
            })
            .catch(err => console.error(err))
        }
      }
  }
  </script>

  <style>

  </style>
