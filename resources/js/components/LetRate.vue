<template>
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
        <button type="button" class="btn btn-dark" @click="sendRating">INVIA VOTO</button>
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
