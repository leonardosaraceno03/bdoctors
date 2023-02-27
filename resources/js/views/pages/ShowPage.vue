<template>
  <div class="container">
    <h4>
        ciao, sono la showPage
    </h4>
    <span v-if="doctor">
        ciao belli, io so : {{ doctor.user.name }} {{ doctor.user.surname }} 
        <!-- <div v-for="spec in doc.specializations" :key="spec.id">
            e ssò dottò de {{ spec.name }}
        </div> -->
    </span>
    
    <h3>
        inviami un messaggio, risponderò per email
    </h3>
        <SendMessage/>
    <h3>
        lascia una recensione
    </h3>
        <LetReview/>
  </div>
</template>

<script>
import SendMessage from '../../components/SendMessage.vue'
import LetReview from '../../components/LetReview.vue'

export default {
    name: 'ShowPage',
    components: {
        SendMessage,
        LetReview
    },
    data() {
        return {
            //doc: this.$route.params.selectedDoctor,
            doctor: null,
        }
    },
    mounted() {
        this.getDoctor();
        
    },
    methods: {
        getDoctor(){
            axios.get("http://localhost:8000/api/doctors/" + this.$route.params.id)
            .then((res) => {
                this.doctor = res.data;
                console.log(this.doctor);
            })
            .catch(err => console.error(err))
        }
        
    }
}
</script>

<style>

</style>
