<template>
  <div>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Programas Sociales</h1>
        <p class="lead"></p>
      </div>
    </div>
    <div class="col">
      <form action method="post" @submit="create">
        <div class="form-row">
          <div class="col">
            <label for="">¿Inscrito en otro porgrama social?</label>
            <br />
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="enrolled_another_social_program"
                id="inlineRadio1"
                value="SI"
              />
              <label class="form-check-label" for="inlineRadio1">Si</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="enrolled_another_social_program"
                id="inlineRadio2"
                value="NO"
              />
              <label class="form-check-label" for="inlineRadio2">No</label>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">¿Qué programa?</label>
            <input
              type="text"
              name="what_program"
              class="form-control"
              required
            />
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for="">¿Algún tipo de subsidio?</label>
            <br />
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="some_subsidy_type"
                id="inlineRadio3"
                value="SI"
              />
              <label class="form-check-label" for="inlineRadio3">Si</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="some_subsidy_type"
                id="inlineRadio4"
                value="NO"
              />
              <label class="form-check-label" for="inlineRadio4">No</label>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for="">¿Qué subsidio?</label>
            <input
              type="text"
              name="what_subsidy_type"
              class="form-control"
              required
            />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Ingresos recibidos</label>
            <input
              type="text"
              name="income_received"
              class="form-control"
              required
            />
          </div>
        </div>

        <input type="hidden" v-model="document" name="document_number" />
        {{ form }}

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
            name: 'CreateEducation',
            params: { id: document },
          }"
          >Educación</router-link
        >
      </div>
    </div>
  </div>
</template>

<script>
import api from "../../../containers/SocialProgram";
export default {
  data() {
    return {
      typePopulations: [],
      ethnicities: {},
      ageGroups: {},
      document: 0,
      nextComponent: false,
      form: {},
    };
  },
  methods: {
    get() {
      this.document = this.$route.params.id;
      this.form.document_number = this.$route.params.id;
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