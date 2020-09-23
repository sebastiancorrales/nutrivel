<template>
  <div class="container-fluid">
    <h2>{{beneficiary.first_name}} {{beneficiary.second_name}} {{beneficiary.first_last_name}} {{beneficiary.second_last_name}}</h2>
    <hr />
    <DetailOptionsBeneficiary></DetailOptionsBeneficiary>
    <div class="row">
      <div class="col">
        <div v-for="main in main_economic_supplier" :key="main.id">
          <div class="card m-2">
            <div class="card-body">
              <h5 class="card-title">
                <strong>Principal Proveedor Económico:</strong>
              </h5>

              <h3>
                <strong>Nombre:</strong>
                {{main.name}}
              </h3>
              <h3>
                <strong>Ocupación:</strong>
                {{main.occupation}}
              </h3>
              <h3>
                <strong>Lugar de trabajo:</strong>
                {{main.workplace}}
              </h3>
              <h3>
                <strong>Ingresos:</strong>
                {{main.income}}
              </h3>
              <h3>
                <strong>Egresos:</strong>
                {{main.expenses}}
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
      main_economic_supplier: {},
    };
  },
  methods: {
    get() {
      const id = this.$route.params.id;
      api.find(id).then((data) => {
        this.beneficiary = data;
        this.main_economic_supplier = this.beneficiary.main_economic_supplier;
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