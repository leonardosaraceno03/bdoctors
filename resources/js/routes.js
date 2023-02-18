//questo lo si crea dopo
//  npm i vue-router@3 //
//da terminale

//si gestiscono le rotte front
// il WEB.PHP del FRONT

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

//import componenti che fungono da pagine
import AboutUs from './views/pages/AboutUs.vue'
import DoctorsIndex from './views/pages/doctors/DoctorsIndex.vue'
import HomePage from './views/pages/HomePage.vue'
import DoctorShow from './views/pages/doctors/DoctorShow.vue'
import SpecializationsIndex from './views/pages/specializations/SpecializationsIndex.vue'
import SpecializationShow from './views/pages/specializations/SpecializationShow.vue'


const router = new VueRouter({
    //istanzio il Router e lo abbino alla varibile
    //qua scrivo i Path per le pagine

    // tiene memoria delle rotte, "collegandosi"
    //alle frecce <- -> , visto che siamo
    //in una SinglPageApplication
    mode: 'history',

    routes: [
        {
            path: '/',
            name: '/',
            component: HomePage
        },
        {
            path: '/about-us',
            name: 'about-us',
            component: AboutUs
        },
        {
            path: '/doctors',
            name: 'doctors',
            component: DoctorsIndex
        },
        {
            path: '/doctors/:id',
            name: 'singleDoctor',
            component: DoctorShow
        },
        {
            path: '/specializations',
            name: 'specializations',
            component: SpecializationsIndex
        },
        {
            path: '/specializations/:name',
            name: 'singleTag',
            component: SpecializationShow
        }
    ]



});


// esporto in App.js
export default router;
