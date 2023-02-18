<template>
  <div>

    <h1>
        CIAO SONO L'HEADER.. QUI ANDRà LA NAVBAR
    </h1>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <router-link :to="'/'" class="nav-link">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="'/about-us'" class="nav-link">About Us</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="'/doctors'" class="nav-link">Mostra i dottori</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="'/specializations'" class="nav-link">Mostra le specializzazioni</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  </div>
</template>

<script>
export default {
    name: 'Header',
}
</script>

<style>

</style>
