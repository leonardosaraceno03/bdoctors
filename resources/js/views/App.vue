<template>
  <div>

    <Header/>

    <h1>
        WORK IN PROGRESS
    </h1>

    <router-view></router-view>
    <!-- non c'è bisogno di importazione
        ci fa usare il ROUTER
        e ci innesta il codice nel TAG
        simile allo @YIELD di LARAVEL -->

  </div>
</template>

<script>

import Header from '../components/Header.vue'

export default {
    name: 'App',
    components: {
        Header,
    }
}
</script>

<style>

</style>
