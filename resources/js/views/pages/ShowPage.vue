<template>
  <div class="container mt-5 p-3 bg-light rounded">
    
    <div v-if="doctor" class="pt-5 p-3">
        <div class="row">
            <div class="col-lg-4 col-xl-4 col-12 pb-5">
                <div class="ms-profile-img-box">
                    <img :src="`/storage/${doctor.avatar}`" class="ms-profile-img" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-xl-8 col-sm-12">
                <h3 > {{ doctor.user.name }} {{ doctor.user.surname }}</h3> 
                <h5>{{doctor.description}}</h5>
                <h5>Specializzazioni</h5>
                <ul v-for="spec in doctor.specializations" :key="spec.id">
                    <li>{{ spec.name }}</li>
                </ul>
                <h6>Prestazioni: {{doctor.performance}}</h6>
                <h6>Tel: {{doctor.telephone}}</h6>
                <h6>Media Voti : {{(this.avg_vote).toFixed(1)}}<i class="fa-solid fa-star"></i></h6>
                <h6>Totale recensioni : {{doctor.reviews.length}}</h6>
                
                <div class="mt-5">
                    <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Visualizza CV</button>
                </div>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Cv di {{ doctor.user.name }}
                            {{ doctor.user.surname}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <img :src="`/storage/${doctor.cv}`" alt="" height="900px" class="mt-3 mb-3">
                    </div>
                </div>
            </div>

        </div>
        

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

    .offcanvas-end{
        width: 40vw;
    }
    
    .ms-profile-img-box{
        margin-inline: auto;
        border-radius: 50%;
        aspect-ratio: 1/1;
        overflow: hidden;
        width: 300px;
        height: 300px;
    }

    .ms-profile-img{
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

</style>
