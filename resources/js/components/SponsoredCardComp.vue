<template>
    <div class="container ms-oro bg-danfer py-3 mt-20">
            <div class="row ">
                <div class="col-4 ">
                    <div class="ms-profile-img-box">
                        <img :src="`/storage/${sponsoredDoc.avatar}`" alt="" class="ms-profile-img">
                    </div>
                </div>
                <div class="col-8 text-center ">
                    <router-link :to="`/doctors/${sponsoredDoc.id}`">

                    <h5>{{ sponsoredDoc.user.name }} - {{ sponsoredDoc.user.surname }}</h5>

                    <div v-for="spec in sponsoredDoc.specializations" :key="spec.id">
                        <h6>{{ spec.name }}</h6>
                    </div>

                    <div>
                        Valutazione: {{ getAverageRating() }} <i class="fa-solid fa-star text-warning"></i>
                    </div>

                    <div>
                        <span> N° recensioni : {{sponsoredDoc.reviews.length}}</span>
                    </div>

                    </router-link>
                </div>
            </div>
        </div> 
</template>

<script>
  export default {
      name: 'SponsoredCardComp',
      props: ['sponsoredDoc'],

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
                    if (this.sponsoredDoc.ratings.length === 0) {
                    return 0;
                }
                    const totalStars = this.sponsoredDoc.ratings.reduce((acc, rating) => {
                    return acc + rating.stars;
                }, 0);
                    return (totalStars / this.sponsoredDoc.ratings.length).toFixed(1);
            }

      }
  }
  </script>

  <style lang="scss" scoped>
    .ms-oro{
        background-color: gold;

    }
    .mt-20{
        margin-top: 30px;
    }
    .h-100{
        height: 100%;
    }

    a{
        text-decoration: none;
        color: inherit;
    }

    .foto-profilo{
        border-radius: 50%;
        width: 100%;
        height: 100%;
        aspect-ratio: 1/1;
    }

    .ms-profile-img-box{
        margin-inline: auto;
        border-radius: 50%;
        aspect-ratio: 1/1;
        overflow: hidden;
        width: 130px;
        height: 130px;
    }

    .ms-profile-img{
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
  </style>
