<template>
  <div class="container-fluid">
    <h2>{{beneficiary.first_name}} {{beneficiary.second_name}} {{beneficiary.first_last_name}} {{beneficiary.second_last_name}}</h2>
    <hr />
    <DetailOptionsBeneficiary></DetailOptionsBeneficiary>
    <div class="row">
      <div class="col">
        <div v-for="educa in social_security" :key="educa.id">
          <div class="card m-2">
            <div class="card-body">
              <h5 class="card-title">
                <strong>Seguridad Social:</strong>
              </h5>

              <h3>
                <strong>EPS:</strong>
                {{educa.eps_name}}
              </h3>
              <h3>
                <strong>Tipo de afiliación:</strong>
                {{educa.afiliation_type}}
              </h3>
              <h3>
                <strong>¿Tiene Sisbén?:</strong>
                {{educa.has_sisben}}
              </h3>
              <h3>
                <strong>Puntaje:</strong>
                {{educa.score_sisben}}
              </h3>
              <h3>
                <strong>Regimen de seguridad social:</strong>
                {{educa.social_security_scheme_id}}
              </h3>
              <h3>
                <strong>Diversidad funcional:</strong>
                {{educa.funcional_diversity_id}}
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
      social_security: {},
    };
  },
  methods: {
    get() {
      const id = this.$route.params.id;
      api.find(id).then((data) => {
        this.beneficiary = data;
        this.social_security = this.beneficiary.social_security;
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