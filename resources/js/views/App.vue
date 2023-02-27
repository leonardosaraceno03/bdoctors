<template>
  <div id="app">

    <Header/>

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

body {
  font-family: "Open Sans", sans-serif;

}

</style>
