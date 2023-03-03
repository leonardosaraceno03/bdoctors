<template>
  <div class="container mt-5 p-3 bg-light rounded">
    
    <div v-if="doctor">
        <h3 > {{ doctor.user.name }} {{ doctor.user.surname }} </h3> 
        <h5>{{doctor.description}}</h5>
        <h5>Specializzazioni</h5>
        <ul v-for="spec in doctor.specializations" :key="spec.id">
            <li>{{ spec.name }}</li>
        </ul>
        <h6>Prestazioni: {{doctor.performance}}</h6>
        <h6>Tel: {{doctor.telephone}}</h6>
        <h6>Media Voti : {{(this.avg_vote).toFixed(1)}}<i class="fa-solid fa-star"></i></h6>
        <h6>Totale recensioni : {{doctor.reviews.length}}</h6>
        
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
