<template>
    <div>
      <nav class="navbar navbar-expand-lg bg-primary d-flex justify-content-between align-items-center container-fluid px-5">
        <div>
            <a class="navbar-brand text-white" href="/">BDoctors</a>
            <a class="navbar-brand text-white" href="/doctors">FilterPage</a>
        </div>
        <div class="">

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">

                      <li class="nav-item">
                          <a href="/login" class="nav-link text-white">Accedi</a>
                      </li>
                      <li class="nav-item">
                          <a href="/register" class="nav-link text-white">Registrati</a>
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
