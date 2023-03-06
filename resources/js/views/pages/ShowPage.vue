<template>
  <div class="container mt-5 pb-5">
    
    <div v-if="doctor" class="p-5 text-white ms-container-bg">
        <div class="row justify-content-between">
            <div class="col-lg-5 col-xl-4 col-12 d-flex align-items-center">
                <div class="ms-profile-img-box">
                    <img :src="`/storage/${doctor.avatar}`" class="ms-profile-img" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-xl-8 col-sm-12 ms-doc-info-box">
                <h3 > {{ doctor.user.name }} {{ doctor.user.surname }}</h3> 
                <h5>{{doctor.description}}</h5>
                <h5>Specializzazioni</h5>
                <ul v-for="spec in doctor.specializations" :key="spec.id">
                    <li>{{ spec.name }}</li>
                </ul>
                <h6>Prestazioni: {{doctor.performance}}</h6>
                <h6>Tel: {{doctor.telephone}}</h6>
                
                <h6 v-if="doctor.ratings.length > 0">Media Voti : {{(this.avg_vote).toFixed(1)}}<i class="fa-solid fa-star"></i></h6>
                <h6>Totale recensioni : {{doctor.reviews.length}}</h6>
                
                <div class="mt-5">
                    <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Visualizza CV</button>
                </div>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Cv di {{ doctor.user.name }}
                            {{ doctor.user.surname}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <img :src="`/storage/${doctor.cv}`" alt="" class="mt-3 mb-3 ms-cv-img">
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
    
    

    .ms-container-bg{
        background: linear-gradient(to top,  #045ca9, #0088ff,);
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
    }

    .container{
        --bs-gutter-x: 0;
    }
    
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
        width: 270px;
        height: 270px;
    }

    .ms-profile-img{
        object-fit: cover;
        width: 100%;
        height: 100%;
    }

    .ms-cv-img{
        height:900px;
    }

    .ms-doc-info-box{
        padding-top: 20px;
    }

    .offcanvas-end{
        width: 50vw;
    }

    @media screen and (max-width:375px) {
        
        .ms-profile-img-box{
            width: 200px;
            height: 200px;
        }

        .ms-cv-img{
            height:600px;
        }
    }
    
    @media screen and (max-width:768px) {
        
        .offcanvas-end{
            width: 100vw;
        }
    }

    @media screen and (max-width:992px) {
        
        .ms-doc-info-box{
            padding-top: 60px;
        }
        
    }

</style>
