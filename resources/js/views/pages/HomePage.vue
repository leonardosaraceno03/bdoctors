<template>
  <div>
    <div>
      <div>
        <div class="p-5 bg-ms text-white w-100">
          <h1 class="text-center text-white">Trova il Dottore che fa per te!!</h1>
          
          <div class="form-style my-4">
            
          <select v-model="selectedSpecialization" class="form-select text-white bg-primary">
            <option value="" disabled selected>Seleziona un'opzione</option>
            <option
              v-for="elem in specializationsArray"
              :key="elem.id"
              :value="elem.id"
            >
              {{ elem.name }}
            </option>
          </select>
          <router-link
            class="btn btn-primary d-inline"
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

    <div class="pt-3 container">
        <SponsoredCardsContainer/>
    </div>

    <!-- ======= Doctors Section ======= -->
    <!-- <section id="doctors" class="doctors mt-5">

      <div class="container">
        <div>
          <h2 class="text-center">Doctors</h2>
          <p class="my-5">
            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex
            aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos
            quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
            fugiat sit in iste officiis commodi quidem hic quas.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="member d-flex align-items-start">
              <div class="pic">
                <img
                  src="assets/img/doctors/doctors-1.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Medical Officer</span>
                <p>
                  Explicabo voluptatem mollitia et repellat qui dolorum quasi
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic">
                <img
                  src="assets/img/doctors/doctors-2.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Anesthesiologist</span>
                <p>
                  Aut maiores voluptates amet et quis praesentium qui senda para
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic">
                <img
                  src="assets/img/doctors/doctors-3.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cardiology</span>
                <p>
                  Quisquam facilis cum velit laborum corrupti fuga rerum quia
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
              <div class="pic">
                <img
                  src="assets/img/doctors/doctors-4.jpg"
                  class="img-fluid"
                  alt=""
                />
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Neurosurgeon</span>
                <p>
                  Dolorum tempora officiis odit laborum officiis et et accusamus
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- End Doctors Section -->
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
  background: linear-gradient(to bottom, #0088ff, #003c53, );

}


.doctors .member {
  position: relative;
  box-shadow: 0px 2px 15px rgba(44, 73, 100, 0.08);
  padding: 30px;
  border-radius: 10px;
}

.doctors .member .pic {
  overflow: hidden;
  width: 180px;
  border-radius: 50%;
}

.doctors .member .pic img {
  transition: ease-in-out 0.3s;
}

.doctors .member:hover img {
  transform: scale(1.1);
}

.doctors .member .member-info {
  padding-left: 30px;
}

.doctors .member h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 20px;
  color: #2c4964;
}

.doctors .member span {
  display: block;
  font-size: 15px;
  padding-bottom: 10px;
  position: relative;
  font-weight: 500;
}

.doctors .member span::after {
  content: "";
  position: absolute;
  display: block;
  width: 50px;
  height: 1px;
  background: #0077e7;
  bottom: 0;
  left: 0;
}

.doctors .member p {
  margin: 10px 0 0 0;
  font-size: 14px;
}

.doctors .member {
  margin-top: 12px;
  display: flex;
  align-items: center;
  justify-content: flex-start;
}

.doctors .member a {
  transition: ease-in-out 0.3s;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50px;
  width: 32px;
  height: 32px;
  background: #a0bcd5;
}

.doctors .member a i {
  font-size: 16px;
  margin: 0 2px;
}

.doctors .member a:hover {
  background: #1977cc;
}

.doctors .member a + a {
  margin-left: 8px;
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


</style>
