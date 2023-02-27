<template>
  <div class="container mt-5 p-3 bg-light rounded">
    
    <h2 class="mb-5">ShowPage</h2>
    
    <div v-if="doctor">
        <h4 > {{ doctor.user.name }} {{ doctor.user.surname }} </h4> 
        <!-- <div v-for="spec in doc.specializations" :key="spec.id">
            e ssò dottò de {{ spec.name }}
        </div> -->
        <p>Media Voti : {{(this.avg_vote).toFixed(1)}}<i class="fa-solid fa-star"></i></p>
    </div>
        
        <SendMessage/>
    
        <LetReview/>
    
        <LetRate/>

  </div>
</template>

<script>
import SendMessage from '../../components/SendMessage.vue'
import LetReview from '../../components/LetReview.vue'
import LetRate from '../../components/LetRate.vue'

export default {
    name: 'ShowPage',
    components: {
        SendMessage,
        LetReview,
        LetRate
    },
    data() {
        return {
            //doc: this.$route.params.selectedDoctor,
            doctor: null,
            avg_vote: null
        }
    },
    mounted() {
        this.getDoctor();
        
    },
    methods: {
        getDoctor(){
            axios.get("http://localhost:8000/api/doctors/" + this.$route.params.id)
            .then((res) => {
                this.doctor = res.data.single_doctor;
                this.avg_vote = res.data.avg_vote;
                console.log(this.doctor);
            })
            .catch(err => console.error(err))
        }
        
    }
}
</script>

<style lang="scss" scoped>
    .fa-star{
        color: #ffc107;
    }
</style>
