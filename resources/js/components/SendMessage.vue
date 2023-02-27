<template>
    <div class="py-5">
        
        <h3 class="mb-3"> Inviami un messaggio, risponderò per email</h3>

        <div class="row">
            <div class="col-6 col-sm-4 pt-3">
                <input type="text" v-model="name" placeholder="Nome" class="input-group form-control"/>
            </div>
            <div class="col-6 col-sm-4 pt-3">
                <input type="text" v-model="surname" placeholder="Cognome" class="input-group form-control"/>
            </div>
             <div class="col-12 col-sm-4 pt-3">
                <input type="email" v-model="email" placeholder="email" class="input-group form-control"/>
            </div>
            <div class="col-12 pt-3">
                <textarea v-model="body" class="form-control" placeholder="Messaggio"></textarea>
            </div>
        </div>
        <div class="pt-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalMess" @click="sendMessage">Invia Messaggio</button>
        </div>

        <div class="modal fade" id="exampleModalMess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="offcanvas-title">
                            Messaggio inviato con successo! <i class="fa-solid fa-circle-check"></i>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Verrai contattato al più presto tramite  e-mail</p>
                    </div>
                </div>
            </div>
        </div>

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
            .catch(err => 
                console.error(err))
            .finally(() => {
                this.name = "",
                this.surname = "",
                this.email = "",
                this.body = ""
            })

        }   
      }
  }
</script>

<style lang="scss" scoped>
    
    .fa-circle-check{
        color: #28A745;
    }
    
</style>
