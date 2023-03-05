<template>
  <div>
    <nav
      class="navbar navbar-expand-sm bg-primary d-flex justify-content-between align-items-center container-fluid px-5"
    >
      <div>
        <router-link class="navbar-brand text-white" :to="`/`">
          BDoctors
        </router-link>
        <router-link class="navbar-brand text-white" :to="`/doctors`">
          Cerca <i class="fa-solid fa-stethoscope"></i>
        </router-link>
      </div>
      <div>

        <div
          class="collapse navbar-collapse text-white"
          id="navbarNav"
          v-if="authUser == null"
        >
          <a href="/login" class="nav-link mx-2">Accedi</a>
          <a href="/register" class="nav-link">Registrati</a>
        </div>
        <div class="dropdown" v-else>
          <a
            class="btn"
            href="#"
            role="button"
            data-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="fa-solid fa-user-doctor text-white"></i>
          </a>

          <div class="dropdown-menu " style="left: auto; right: 0">
            <a class="dropdown-item text-muted" href="/admin/doctors/index">Profilo</a>
            <a class="dropdown-item text-muted" href="/admin/doctors">Dashboard</a>
            <a class="dropdown-item text-muted" href="#" @click.prevent="logoutUser"
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
      // inizialmente impostata a null
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


<style lang="scss" scoped>
</style>
