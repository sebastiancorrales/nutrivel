<template>
  <div>
    <h1>Datos Poblacionales</h1>
    <div class="col">
      <form action method="post" @submit="create">
        <label for>Tipo de Población</label>
        <select
          name="type_population"
          v-model="form.typePopulation"
          class="custom-select"
        >
          <option
            v-for="typePopulation in typePopulations"
            :key="typePopulation.id"
            :value="typePopulation.id"
          >
            {{ typePopulation.name }}
          </option>
        </select>
        <label for>Grupo etario</label>
        <select name="age_group" class="custom-select" v-model="form.ageGroups">
          <option
            v-for="ageGroup in ageGroups"
            :key="ageGroup.id"
            :value="ageGroup.id"
          >
            {{ ageGroup.name }}
          </option>
        </select>
        <label for>Pertenencia etnica</label>
        <select
          name="ethnicity"
          class="custom-select"
          v-model="form.ethnicities"
        >
          <option
            v-for="ethnicity in ethnicities"
            :key="ethnicity.id"
            :value="ethnicity.id"
          >
            {{ ethnicity.name }}
          </option>
        </select>
        <input type="hidden" v-model="document" name="document_number" />
        {{ form }}
        <div class="row">
          <div class="col">
            <button class="btn mt-2 btn-primary">Guardar</button>
          </div>
        </div>
      </form>
       <div v-show="!nextComponent" class="row">
          <router-link class="btn-options right" :to="{name: 'CreateFamilyStructure', params:{id:document}}">Estructura Familiar</router-link>
      </div>
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
      nextComponent: false,
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
          toastr.success("Se ha creado correctamente"); 

          this.nextComponent = true;
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