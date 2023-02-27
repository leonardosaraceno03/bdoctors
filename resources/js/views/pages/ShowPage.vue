<template>
  <div class="container pt-5">
    <h4>
        ciao, sono la showPage
    </h4>
    <div v-if="doctor">
        <h5 > ciao belli, io so : {{ doctor.user.name }} {{ doctor.user.surname }} </h5> 
        <!-- <div v-for="spec in doc.specializations" :key="spec.id">
            e ssò dottò de {{ spec.name }}
        </div> -->
        <p>Media Voti : {{(this.avg_vote).toFixed(1)}}<i class="fa-solid fa-star"></i></p>
    </div>
    
    
    <h3 class="my-3">
        inviami un messaggio, risponderò per email
    </h3>
        <SendMessage/>
    <h3 class="my-3">
        lascia una recensione
    </h3>
        <LetReview/>
    <h3 class="my-3">
        Dai un voto al medico
    </h3>
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

<style>

</style>
