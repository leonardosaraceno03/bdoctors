<template>
  <div>
    <div>
      <div>
        <div class="p-5 bg-ms text-white w-100">
          <h1 class="text-center text-white">Trova il Dottore che fa per te!</h1>
          
          <div class="form-style my-4">
            
          <select v-model="selectedSpecialization" class="form-select text-white bg-ms2 bg-primary">
            <option value="">Qualsiasi</option>
            <option
              v-for="elem in specializationsArray"
              :key="elem.id"
              :value="elem.id"
            >
              {{ elem.name }}
            </option>
          </select>
          <router-link
            class="btn btn-home-custom d-inline"
            :to="{
              name: 'doctors',
              params: {
                selectedSpec: selectedSpecialization,
              },
            }"
          >
            Cerca
          </router-link>
        </div>
        </div>

      </div>
    </div>

    <div class="p-3 container">
        <SponsoredCardsContainer/>
    </div>

    
  </div>
</template>

<script>

import Loader from "../../components/Loader.vue";
import SponsoredCardsContainer from "../../components/SponsoredCardsContainer.vue"

export default {
  name: "HomePage",
  components: {
    Loader,
    SponsoredCardsContainer
  },
  data() {
    return {
      specializationsArray: [],
      selectedSpecialization: "",
      isLoading: false,
    };
  },
  mounted() {
    this.getSpecializations();
  },
  methods: {
    //step2 - in questa pagina dobbiamo effettuare la chiamata Axios
    //per ciclare le Specializzazioni
    getSpecializations() {
      this.isLoading = true;
      axios
        .get("http://localhost:8000/api/specializations/")
        .then((res) => {
          //console.log('questo è res.data', res.data);
          this.specializationsArray = res.data;
        })
        .catch((err) => {
          console.log(err);
        })
        .then(() => {
          this.isLoading = false;
        });
    },
  },
};
</script>

<style lang="scss" scoped>
img {
  width: 50%;
}

.bg-ms{
  background-color: #0c57c8;

}

.form-select{
    width: 50%;
    display: inline-block;
    margin-right: 10px;
    text-align: center;
    border: none;
    background-color: rgb(4, 3, 3, 0.1);

}

.form-style{
    text-align: center;

}

.btn-home-custom{
  background-color: #0a4399;
  color: white;
}

.btn-home-custom:hover{
  background-color: #093577;
}


</style>
