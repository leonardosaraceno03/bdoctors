<template>
  <div>

    <h1>
        Ciao, sono la DOCTORS INDEX
    </h1>

    <DoctorsList/>

  </div>
</template>

<script>
import DoctorsList from '../../../components/doctors/DoctorsList.vue'

export default {
    name: 'DoctorsIndex',
    components: {
        DoctorsList
    }
}
</script>

<style>

</style>
