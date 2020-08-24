<template>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Tipo de Población</h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Acciones</th>
            </tr>
            <tbody>
              <tr v-for="typePopulation in typePopulations" :key="typePopulation.id">
                  <td>{{typePopulation.name}}</td>
                  <td>
                    <span href="" class="btn-options">Editar </span>
                    <span href="" class="btn-options">Detalle </span>
                    <span href="" class="btn-options">Eliminar</span>
                  </td>
              </tr>
            </tbody>
          </thead>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
import api from "../../containers/TypePopulation";
export default {
  data() {
    return {
      typePopulations: {},
    };
  },
  created() {
    api.get().then((data) => {
      this.typePopulations = data;
    });
  },
};
</script>

<style>
</style>