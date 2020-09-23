<template>
  <div class="container">
    <div class="row">
      <div class>
        <small>Nombre</small>
        <h3>{{typePopulation.name}}</h3>
        <small>Creado:</small>
        <h3>{{typePopulation.created_at}}</h3>
      </div>
    </div>
  </div>
</template>

<script>
import api from "../../containers/TypePopulation";
export default {
  data() {
    return {
      typePopulation: {},
    };
  },
  methods: {
    get() {
      const id = this.$route.params.id;
      api.find(id).then((data) => {
        this.typePopulation = data;
        console.log(data);
      });
    },
  },
  created() {
    this.get();
  },
};
</script>

<style>
</style>