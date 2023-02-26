<template>
    <div>
        <form v-on:submit="sendMessage">
            <input type="text" v-model="name" placeholder="nome" />
            <input type="text" v-model="surname" placeholder="cognome" />
            <input type="email" v-model="email" placeholder="email" />
            <textarea name="body" v-model="body"></textarea>
            <button type="submit">INVIA</button>
        </form>
    </div>
  </template>

  <script>
  export default {
      name: 'SendMessage',
      components: {

      },
      data() {
          return {
            name: "",
            surname: "",
            email: "",
            body: ""
          }
      },
      mounted() {

      },
      methods: {
        sendMessage(){
            axios.post('/api/message', {
                name: this.name,
                surname: this.surname,
                email: this.email,
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
