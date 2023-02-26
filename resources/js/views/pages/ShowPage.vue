<template>
  <div>
    <h4>
        ciao, sono la showPage
    </h4>
    <span>
        ciao belli, io so : {{ doctor.user.name }} {{ doctor.user.surname }} <br>
        <!-- <div v-for="spec in doc.specializations" :key="spec.id">
            e ssò dottò de {{ spec.name }}
        </div> -->
    </span>
    <br>
    <h3>
        inviami un messaggio, risponderò per email
    </h3>
    <SendMessage/>
    <br>
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
            doctor: [],
        }
    },
    mounted() {
        console.log(doc);
        this.getSelectedDoctor();
    },
    methods: {
        getSelectedDoctor(){
            axios.get(`api/doctors/${this.$route.params.selectedDoctor}`)
            .then((res) => {
                console.log('questo è single_doctor', res.data)
                this.doctor = res.data
            })
            .catch(err => console.error(err))
        }
    }
}
</script>

<style>

</style>
