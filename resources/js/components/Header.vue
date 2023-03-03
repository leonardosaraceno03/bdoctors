<template>
  <div>
    <nav
      class="navbar navbar-expand-lg bg-light d-flex justify-content-between align-items-center container-fluid px-5"
    >
      <div
        class="container-fluid d-flex justify-content-between align-items-center px-4"
      >
        <div>
          <router-link class="navbar-brand" :to="`/`"> BDoctors </router-link>

          <router-link class="navbar-brand" :to="`/doctors`">
            Cerca il tuo Dottore
          </router-link>
        </div>

        <div>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

        <div class="dropdown" v-if="authUser == null">
          <div class="navbar-nav">
            <a href="/login" class="nav-link">Accedi</a>
            <a href="/register" class="nav-link">Registrati</a>
          </div>
        </div>
        <div class="dropdown" v-else>
          <a
            class="btn dropdown-toggle"
            href="#"
            role="button"
            data-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fas fa-user"></i>
          </a>

          <div class="dropdown-menu" style="left: auto; right: 0">
            <a class="dropdown-item text-muted" href="/admin/doctors/index"
              >Profilo</a
            >
            <a class="dropdown-item text-muted" href="/admin/doctors"
              >Dashboard</a
            >
            <a
              class="dropdown-item text-muted"
              href="#"
              @click.prevent="logoutUser"
              >Logout</a
            >
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>

  <script>
export default {
  name: "Header",
  data() {
    return {
      authUser: window.authUser,
    };
  },
  created() {
    console.log(this.authUser);
  },

  methods: {
    logoutUser() {
      axios
        .post("/logout")
        .then((response) => {
          window.location = "/";
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
