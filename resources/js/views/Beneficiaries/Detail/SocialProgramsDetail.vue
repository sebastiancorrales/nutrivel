<template>
  <div class="container-fluid">
    <h2>{{beneficiary.first_name}} {{beneficiary.second_name}} {{beneficiary.first_last_name}} {{beneficiary.second_last_name}}</h2>
    <hr />
    <DetailOptionsBeneficiary></DetailOptionsBeneficiary>
    <div class="row">
      <div class="col-6">
        <div class="card m-2">
          <div class="card-body">
            <h5 class="card-title">Programas Sociales</h5>

            <small>¿Inscrito en otro programa social?</small>
            <h3>{{socialProgram[0].enrolled_another_social_program}}</h3>
            <small>¿Qué programa?</small>
            <h3>{{socialProgram[0].what_program}}</h3>
            <small>¿Algún tipo de subsidio?</small>
            <h3>{{socialProgram[0].some_subsidy_type}}</h3>
            <small>¿Qué subsidio?</small>
            <h3>{{socialProgram[0].what_subsidy_type}}</h3>
            <small>Ingresos recibidos</small>
            <h3>{{socialProgram[0].income_received}}</h3>
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
      socialProgram: {},
    };
  },
  methods: {
    get() {
      const id = this.$route.params.id;
      api.find(id).then((data) => {
        this.beneficiary = data;
        this.socialProgram = this.beneficiary.social_program;
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