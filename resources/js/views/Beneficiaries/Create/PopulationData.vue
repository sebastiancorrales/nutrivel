<template>
  <div>
    <h1>Datos Poblacionales</h1>
    <div class="col">
      <form action method="post" @submit="create">
        <label for>Tipo de Población</label>
        <select name="type_population" class="custom-select">
          <option
            v-for="typePopulation in typePopulations"
            :key="typePopulation.id"
            value="typePopulation.id"
          >
            {{ typePopulation.name }}
          </option>
        </select>
        <label for>Grupo etario</label>
        <select name="age_group" class="custom-select">
          <option v-for="ageGroup in ageGroups" :key="ageGroup.id" value="ageGroup.id">
            {{ ageGroup.name }}
          </option>
        </select>
        <label for>Pertenencia etnica</label>
        <select name="ethnicity" class="custom-select">
          <option v-for="ethnicity in ethnicities" :key="ethnicity.id" value="ethnicity.id">
            {{ ethnicity.name }}
          </option>
        </select>
        <input type="hidden" v-model="document" name="document_number"/>

        <div class="row">
          <div class="col">
            <button class="btn mt-2 btn-primary">Guardar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import apiTypePopulation from "../../../containers/TypePopulation";
import apiAgeGroup from "../../../containers/AgeGroup";
import apiEthnicity from "../../../containers/Ethnicity";
import api from "../../../containers/Beneficiary";
export default {
  data() {
    return {
      typePopulations: [],
      ethnicities: {},
      ageGroups: {},
      document: 0,
      form: {
        typePopulation: null,
        ethnicities: null,
        ageGroups: null,
      },
    };
  },
  methods: {
    get() {
      apiTypePopulation.get().then((data) => {
        this.typePopulations = data;
      });
      apiEthnicity.get().then((data) => {
        this.ethnicities = data;
      });
      apiAgeGroup.get().then((data) => {
        this.ageGroups = data;
      });
      this.document = this.$route.params.id;
    },
    create(e) {
      e.preventDefault();
       api.populationDataStore(e.target).then((data) => {
        if (data.status === 200) {
          console.log("creado");
            console.log(data);
            // $(".toast").toast("show");
       
        } else {
          console.log("paila mono");
        }
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