<template>
  <div class="container-fluid">
    <h2>{{beneficiary.first_name}} {{beneficiary.second_name}} {{beneficiary.first_last_name}} {{beneficiary.second_last_name}}</h2>
    <hr />
    <DetailOptionsBeneficiary></DetailOptionsBeneficiary>
    <div class="row">
      <div class="col">
        <div
          v-for="educa in education"
          :key="educa.id"
        >
          <div class="card m-2" >
            <div class="card-body">
              <h5 class="card-title"><strong>Educaión:</strong></h5>
            
                 <h3><strong>¿Sabe leer y escribir?:</strong> {{educa.know_read_write}}</h3>
                 <h3><strong>Nivel educativo:</strong> {{educa.educational_level}}</h3>
                 <h3><strong>Nivel educativo:</strong> {{educa.study_currently}}</h3>
                 <h3><strong>Grado que cursa actualmente:</strong> {{educa.course_study_currently}}</h3>
                 <h3><strong>Jornada de estudio:</strong> {{educa.study_day}}</h3>
                 <h3><strong>Realiza algún curso actualmente:</strong> {{educa.perform_some_course}}</h3>
                 <h3><strong>Nombre del curso:</strong> {{educa.wich_course}}</h3>
              
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
      education: {},
    };
  },
  methods: {
    get() {
      const id = this.$route.params.id;
      api.find(id).then((data) => {
        this.beneficiary = data;
        this.education = this.beneficiary.education;
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