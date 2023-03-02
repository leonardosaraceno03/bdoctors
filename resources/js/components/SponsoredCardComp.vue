<template>
    <div class="ms-card bg-light rounded my-3 p-3">
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
</template>

<script>
  export default {
      name: 'SponsoredCardComp',
      props: ['sponsoredDoc', 'specializations'],

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
    .ms-card{
        width: calc(94% / 3);
    }

    a{
        text-decoration: none;
        color: inherit;
    }
  </style>
