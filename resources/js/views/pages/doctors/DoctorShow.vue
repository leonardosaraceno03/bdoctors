<template>
  <div>

    <h1>
        Ciao, sono la DOCTOR SHOW !!
    </h1>

    <DoctorCard/>

  </div>
</template>

<script>

import DoctorCard from '../../../components/doctors/DoctorCard.vue'

export default {
    name: 'DoctorShow',
    components: {
        DoctorCard
    }
}
</script>

<style>

</style>
