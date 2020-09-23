<template>
  <div class="container-fluid">
    <h2>{{beneficiary.first_name}} {{beneficiary.second_name}} {{beneficiary.first_last_name}} {{beneficiary.second_last_name}}</h2>
    <hr />
    <DetailOptionsBeneficiary></DetailOptionsBeneficiary>
    <div class="row">
      <div class="col-6">
        <div
          v-for="family_person in family"
          :key="family_person.id"
        >
          <div class="card m-2">
            <div class="card-body">
              <h5 class="card-title"><strong>Parentesco:</strong> {{family_person.kinship_family}}</h5>
              <p class="card-text">
                 <strong>Nombre:</strong> {{family_person.name}}<br>
                 <strong>Fecha de nacimiento:</strong> {{family_person.birthday}}
              </p>
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
      family: {},
    };
  },
  methods: {
    get() {
      const id = this.$route.params.id;
      api.find(id).then((data) => {
        this.beneficiary = data;
        this.family = this.beneficiary.family_structure;
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