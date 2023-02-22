//questo lo si crea dopo
//  npm i vue-router@3 //
//da terminale

//si gestiscono le rotte front
// il WEB.PHP del FRONT

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

//import componenti che fungono da pagine
import HomePage from './views/pages/HomePage.vue'


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

    ]



});


// esporto in App.js
export default router;
