<template>
  <div class="container-fluid">
    <h2>{{beneficiary.first_name}} {{beneficiary.second_name}} {{beneficiary.first_last_name}} {{beneficiary.second_last_name}}</h2>
    <hr>
    <DetailOptionsBeneficiary></DetailOptionsBeneficiary>
    <div class="row">
      <div>
        <br>
        <h4>Información General</h4>

        <small>Documento</small>
        <h3>{{beneficiary.document_type}} {{beneficiary.document_number}}</h3>

        <small>Genero</small>
        <h3>{{beneficiary.gender}}</h3>

        <small>Estado Civil</small>
        <h3>{{beneficiary.civil_status}}</h3>
        
        <small>Fecha y Lugar de Nacimiento</small>
        <h3>{{beneficiary.country_of_birth}} {{beneficiary.place_of_birth}}, {{beneficiary.birthday}} </h3>

      </div>
    </div>
  </div>
</template>

<script>
import api from "../../containers/Beneficiary";
import DetailOptionsBeneficiary from "../../components/DetailOptionsBeneficiary";
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
      console.log(id)
      api.find(id).then((data) => {
        this.beneficiary = data;
        console.log(data)
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