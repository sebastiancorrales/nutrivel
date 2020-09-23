<template>
  <div class="container-fluid">
    <h2>{{beneficiary.first_name}} {{beneficiary.second_name}} {{beneficiary.first_last_name}} {{beneficiary.second_last_name}}</h2>
    <hr />
    <DetailOptionsBeneficiary></DetailOptionsBeneficiary>
    <div class="row">
      <div class="col">
        <div v-for="food in food_security" :key="food.id">
          <div class="card m-2">
            <div class="card-body">
              <h5 class="card-title">
                <strong>Seguridad Alimentaria:</strong>
              </h5>

              <h3>
                <strong>
                  ¿De donde se obtiene el agua para el consumo y
                  preparación de alimentos?
                </strong>
                {{food.where_get_water}}
              </h3>
              <h3>
                <strong>Cantidad de comidas que consume al dia</strong>
                {{food.quantity_food_consume_day}}
              </h3>
              <h3>
                <strong>
                  Tuvo que reducir las porciones de comida en
                  el último mes
                </strong>
                {{food.need_reduce_food_last_months}}
              </h3>
              <h3>
                <strong>¿Cuál fue la causa?:</strong>
                {{food.cause}}
              </h3>
              <h3>
                <strong>
                  Frecuencia de consumo de los siguientes
                  Alimentos:
                </strong>
              </h3>
              <h3>
                <strong>Granos:</strong>
                {{food.grains}}
              </h3>
              <h3>
                <strong>Frutas</strong>
                {{food.fruits}}
              </h3>
              <h3>
                <strong>verduras</strong>
                {{food.vegetables}}
              </h3>
              <h3>
                <strong>lacteos</strong>
                {{food.dairy}}
              </h3>
              <h3>
                <strong>Huevos</strong>
                {{food.eggs}}
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import api from "../../../containers/Beneficiary";
import DetailOptionsBeneficiary from "../../../components/DetailOptionsBeneficiary";
export default {
  components: { DetailOptionsBeneficiary },
  data() {
    return {
      beneficiary: {},
      food_security: {},
    };
  },
  methods: {
    get() {
      const id = this.$route.params.id;
      api.find(id).then((data) => {
        this.beneficiary = data;
        this.food_security = this.beneficiary.food_security;
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