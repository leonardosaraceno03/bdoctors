<template>
  <div>
    <h3>
        ciao, sono il CardsContainer
    </h3>

    <router-link
        v-for="doc in doctors" :key="doc.id"
        :to="`/show/${doc.id}`"
        >
            <CardComp
                :doc="doc"
                :specializations="specializations"
            />
    </router-link>

  </div>
</template>

<script>
import CardComp from './CardComp.vue'
export default {
    name: 'CardsContainer',
    props: ['doctors', 'specializations'],
    components: {
        CardComp
    },
    data() {
        return {
            //doctors: [],
            //specializations: [],
        }
    },
    mounted() {

    },
    methods: {

    }
}
</script>

<style>

</style>
