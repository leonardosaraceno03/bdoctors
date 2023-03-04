<template>
    <div class="p-4 pb-5 bg-light ms-border-bot">
        <div>
            <h3 class="mb-3">Dai un voto al medico</h3>
        </div>
        <div class="c4l-rating">
            <input name="c4l-rating" type="radio" id="c4l-rate1" value="1" v-model="stars"/>
            <label for="c4l-rate1"></label>
            <input name="c4l-rating" type="radio" id="c4l-rate2" value="2" v-model="stars"/>
            <label for="c4l-rate2"></label>
            <input name="c4l-rating" type="radio" id="c4l-rate3" value="3" v-model="stars"/>
            <label for="c4l-rate3"></label>
            <input name="c4l-rating" type="radio" id="c4l-rate4" value="4" v-model="stars"/>
            <label for="c4l-rate4"></label>
            <input name="c4l-rating" type="radio" id="c4l-rate5" value="5" v-model="stars" />
            <label for="c4l-rate5"></label>
        </div>
        <div>
            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModalRat" @click="sendRating" :disabled="stars === ''">Invia Voto</button>
        </div>
        <div class="pt-2">
            <span v-if="stars === ''" class="ms-form-warn text-danger">Seleziona un valore</span>
        </div>

        <div class="modal fade" id="exampleModalRat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="offcanvas-title">
                            Il voto è stato inviato! <i class="fa-solid fa-circle-check"></i>
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
      name: 'LetRate',
      components: {

      },
      data() {
          return {
            stars: "",
            doctor_id: this.$route.params.id
          }
      },
      mounted() {

      },
      methods: {
        sendRating(){
            axios.post('/api/rating', {
                    
                    rating_id: this.stars,
                    doctor_id : this.doctor_id
            })
            .then((res) => {
                console.log(res.data)
                
            })
            .catch(err => 
                console.error(err))

            .finally(() => {
                this.stars = ""
            })
        }
      }
  }
</script>

<style lang="scss" scoped>
    

    .ms-border-bot{
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .ms-form-warn{
        font-size: 0.7rem;
        font-weight: 600;
        margin-left: 5px;
    }


    // stars style

    .c4l-rating input[name="c4l-rating"] { display: none; }
    .c4l-rating input[name="c4l-rating"] + label:after { content: none; }
    .c4l-rating input[name="c4l-rating"] + label { font-family: 'FontAwesome'; }
    .c4l-rating input[name="c4l-rating"] + label:before {
        background-color: transparent;
        border: none;
        color: #ffc107;
        content: '\f005';
        font-size: 1.33333333em;
        transition: none;
    }
    .c4l-rating input[name="c4l-rating"]:checked ~ label:before {
        background-color: transparent;
        border: none;
        color: #607d8b;
    }
    .c4l-rating input[name="c4l-rating"]:checked + label:before { color: #ffc107; }
    .c4l-rating input[name="c4l-rating"] + label:hover ~ input + label:before { opacity: 0.6; }

    // stars style end
    
</style>
