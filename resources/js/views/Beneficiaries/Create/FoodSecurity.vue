<template>
  <div>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Seguridad Alimentaria</h1>
        <p class="lead">¨*</p>
      </div>
    </div>
    <div class="col">
      <form action method="post" @submit="create">
        <div class="form-row">
          <div class="col">
            <label for=""
              >¿De donde se obtiene el agua para el consumo y preparación de
              alimentos?
            </label>
            <select name="where_get_water" id="" class="custom-select">
              <option value="Acueducto público">Acueducto público</option>
              <option value="Acueducto veredal">Acueducto veredal</option>
              <option value="Poza con bomba">Poza con bomba</option>
              <option value="Poza sin bomba o jagüey">
                Poza sin bomba o jagüey
              </option>
              <option value="Agua lluvia">Agua lluvia</option>
              <option value="Rio, quebrada, manantial o nacimiento">
                Rio, quebrada, manantial o nacimiento
              </option>
              <option value="Píla pública">Píla pública</option>
              <option value="Carrotanque">Carrotanque</option>
              <option value="Aguatero">Aguatero</option>
              <option value="Agua embotellada">Agua embotellada</option>
              <option value="Otra">Otra</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for="">Cantidad de comidas que consume al día </label>
            <select
              name="quantity_food_consume_day"
              id=""
              class="custom-select"
            >
              <option value="Una">Una</option>
              <option value="Dos">Dos</option>
              <option value="Tres">Tres</option>
              <option value="Más de tres">Más de tres</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for=""
              >Tuvo que reducir las porciones de comida en el último mes</label
            >
            <select
              name="need_reduce_food_last_months"
              id=""
              class="custom-select"
            >
              <option value="Si">Una</option>
              <option value="No">Dos</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Causa</label>
            <select name="cause" id="" class="custom-select">
              <option value="Ninguna causa">Ninguna causa</option>
              <option value="Situacion económica">Situacion económica</option>
              <option value="Situación de salud">Situación de salud</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for=""
              >Frecuencia de consumo de los siguientes alimentos</label
            >
            <div class="form-row">
              <div class="col-2">
                <label for="">Granos</label>
                <select name="grains" id="" class="custom-select">
                  <option value="Diario">Diario</option>
                  <option value="Cada tercer día">Cada tercer día</option>
                  <option value="Una vez a la semana">Una vez a la semana</option>
                  <option value="Una vez cada 15 dias">Una vez cada 15 dias</option>
                  <option value="Una vez al mes">Una vez al mes</option>
                  <option value="Casi nunca">Casi nunca</option>
                  <option value="Nunca">Nunca</option>
                </select>
              </div>
              <div class="col-2">
                <label for="">Frutas</label>
                <select name="fruits" id="" class="custom-select">
                  <option value="Diario">Diario</option>
                  <option value="Cada tercer día">Cada tercer día</option>
                  <option value="Una vez a la semana">Una vez a la semana</option>
                  <option value="Una vez cada 15 dias">Una vez cada 15 dias</option>
                  <option value="Una vez al mes">Una vez al mes</option>
                  <option value="Casi nunca">Casi nunca</option>
                  <option value="Nunca">Nunca</option>
                </select>
              </div>
              <div class="col-2">
                <label for="">Vegetales</label>
                <select name="vegetables" id="" class="custom-select">
                  <option value="Diario">Diario</option>
                  <option value="Cada tercer día">Cada tercer día</option>
                  <option value="Una vez a la semana">Una vez a la semana</option>
                  <option value="Una vez cada 15 dias">Una vez cada 15 dias</option>
                  <option value="Una vez al mes">Una vez al mes</option>
                  <option value="Casi nunca">Casi nunca</option>
                  <option value="Nunca">Nunca</option>
                </select>
              </div>
              <div class="col-2">
                <label for="">Lacteos</label>
                <select name="dairy" id="" class="custom-select">
                  <option value="Diario">Diario</option>
                  <option value="Cada tercer día">Cada tercer día</option>
                  <option value="Una vez a la semana">Una vez a la semana</option>
                  <option value="Una vez cada 15 dias">Una vez cada 15 dias</option>
                  <option value="Una vez al mes">Una vez al mes</option>
                  <option value="Casi nunca">Casi nunca</option>
                  <option value="Nunca">Nunca</option>
                </select>
              </div>
              <div class="col-2">
                <label for="">Huevos</label>
                <select name="eggs" id="" class="custom-select">
                  <option value="Diario">Diario</option>
                  <option value="Cada tercer día">Cada tercer día</option>
                  <option value="Una vez a la semana">Una vez a la semana</option>
                  <option value="Una vez cada 15 dias">Una vez cada 15 dias</option>
                  <option value="Una vez al mes">Una vez al mes</option>
                  <option value="Casi nunca">Casi nunca</option>
                  <option value="Nunca">Nunca</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <input type="hidden" v-model="document" name="document_number" />
        <div class="row">
          <div class="col">
            <button class="btn mt-2 btn-primary">Guardar</button>
          </div>
        </div>
      </form>
      <div v-show="!nextComponent" class="row">
        <router-link
          class="btn-options right"
          :to="{
            name: 'CreateLocationConditionHousing',
            params: { id: document },
          }"
          >Ubicación y Condiciones de la vivienda</router-link
        >
      </div>
    </div>
  </div>
</template>

<script>
import api from "../../../containers/FoodSecurity";
export default {
  data() {
    return {
      document: 0,
      nextComponent: false,
    };
  },
  methods: {
    get() {
      this.document = this.$route.params.id;
    
    },
    create(e) {
      e.preventDefault();
      api.store(e.target).then((data) => {
        if (data.status === 200) {
          this.nextComponent = true;
          toastr.success("Se ha creado correctamente"); 

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