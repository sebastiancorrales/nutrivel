<template>
  <div class="container-fluid">
    <h2>{{beneficiary.first_name}} {{beneficiary.second_name}} {{beneficiary.first_last_name}} {{beneficiary.second_last_name}}</h2>
    <hr>
    <DetailOptionsBeneficiary></DetailOptionsBeneficiary>
    <div class="row">
      <div class="col-6">

        <small>Nacimiento a término </small>
        <h3>{{beneficiary.birth_term}}</h3>

        <small>¿Cuántos meses?</small>
        <h3>{{beneficiary.number_months_birth}}</h3>

        <small>Parentesco con otro familiar</small>
        <h3>{{beneficiary.kinship_other_family}}</h3>
        
        <small>Tipología familiar</small>
        <h3>{{beneficiary.family_type}} </h3>

        <small>Población desplazada</small>
        <h3>{{beneficiary.displaced_population}} </h3>
        
        <small>Victima de otro tipo de violenciaa</small>
        <h3>{{beneficiary.victim_other_type_violence}} </h3>

        <small>¿Qué tipo de violencia?</small>
        <h3>{{beneficiary.which_violence}} </h3>

      </div>
      <div class="col-6">
          
          <small>Peso al ingreso</small>
          <h3>{{beneficiary.income_weight}} kg </h3>
          
          <small>Talla al ingreso</small>
          <h3>{{beneficiary.income_size}} cm </h3>

          <small>Estado nutricional al ingreso</small>
          <p class="text text-justify">{{beneficiary.nutritional_state_income}} </p>

          <small>Pertenencia etnica</small>
          <h3>{{beneficiary.ethnicity}}</h3>

          <small>Grupo Etario</small>
          <h3>{{beneficiary.age_group}}</h3>

          <small>Pertenencia etnica</small>
          <h3>{{beneficiary.pupulation_type}}</h3>
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
    };
  },
  methods: {
    get() {
      const id = this.$route.params.id;
      api.find(id).then((data) => {
        this.beneficiary = data;

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