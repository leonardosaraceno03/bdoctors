<template>
    <div class="p-2 col-sm-12 col-md-6 col-lg-4">
        <div class="text-white rounded p-3 ms-card">
            <router-link :to="`/doctors/${doc.id}`">

                <div class="row">
                    
                    <div class="col-lg-12 col-5 pt-4">
                        <div class="ms-profile-img-box">
                            <img :src="`/storage/${doc.avatar}`" class="ms-profile-img" alt="">
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-7 pt-4 d-flex justify-content-lg-center">
                        <div>
                            <h5>{{ doc.user.name }} {{ doc.user.surname }}</h5>

                            <div v-for="spec in doc.specializations" :key="spec.id">
                                <h6>{{ spec.name }}</h6>
                            </div>

                            <div>
                                Valutazione: {{ getAverageRating() }} <i class="fa-solid fa-star text-warning"></i>
                            </div>

                            <div>
                                <span> N° recensioni : {{doc.reviews.length}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                

            </router-link>
        </div>
    </div>
</template>

<script>
  export default {
      name: 'CardComp',
      props: ['doc', 'specializations'],

      components: {

      },

      data() {
          return {

          }
      },

      mounted() {

      },
      methods: {
            getAverageRating() {
                    if (this.doc.ratings.length === 0) {
                    return 0;
                }
                    const totalStars = this.doc.ratings.reduce((acc, rating) => {
                    return acc + rating.stars;
                }, 0);
                    return (totalStars / this.doc.ratings.length).toFixed(1);
            }

      }
  }
  </script>

  <style lang="scss" scoped>
    
    .ms-card{
        background: linear-gradient(to top,  #045ca9, #0088ff,);
    }

    .ms-profile-img-box{
        margin-inline: auto;
        border-radius: 50%;
        aspect-ratio: 1/1;
        overflow: hidden;
        width: 100px;
        height: 100px;
    }

    .ms-profile-img{
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    a{
        text-decoration: none;
        color: inherit;
    }
  </style>
