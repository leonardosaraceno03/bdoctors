<template>
    <div class="p-4 bg-light">
        
        <h3 class="mb-3">Lascia una recensione</h3>

        <div class="row">
            <div class="col-6 pt-3">
                <input type="text" v-model="name" placeholder="Nome*" class="input-group form-control" maxlength="30"/>
            </div>
            <div class="col-6 pt-3">
                <input type="text" v-model="surname" placeholder="Cognome*" class="input-group form-control" maxlength="30"/>
            </div>
            <div class="col-12 pt-3">
                <textarea v-model="body" class="form-control" placeholder="Messaggio*" maxlength="255"></textarea>
            </div>
        </div>
        <div class="pt-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalRev" @click="sendReview" :disabled="name === '' || surname === '' ||  body === ''">Invia Recensione</button>
        </div>
        <div>
            <span v-if="name === '' || surname === '' || body === ''" class="ms-form-warn text-danger">Compila tutti i campi (*)</span>
        </div>

        <div class="modal fade" id="exampleModalRev" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="offcanvas-title">
                            Recensione inviata con successo! <i class="fa-solid fa-circle-check"></i>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Grazie per il tuo feedback!</p>
                    </div>
                </div>
            </div>
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

  <style lang="scss" scoped>
    
    .fa-circle-check{
        color: #28A745;
    }

    .ms-form-warn{
        font-size: 0.7rem;
        font-weight: 600;
        margin-left: 5px;
    }

  </style>
