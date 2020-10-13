<template>
  <div>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Educación</h1>
        <p class="lead"></p>
      </div>
    </div>
    <div class="col">
      <form action method="post" @submit="create">
        <div class="form-row">
          <div class="col">
            <label for="">¿Sabe leer y escribir?</label>
            <br />
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="know_read_write"
                id="inlineRadio1"
                value="SI"
              />
              <label class="form-check-label" for="inlineRadio1">Si</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="know_read_write"
                id="inlineRadio2"
                value="NO"
              />
              <label class="form-check-label" for="inlineRadio2">No</label>
            </div>
          </div>
        </div>
 <div class="form-row">
          <div class="col">
            <label for="">Grado que cursa actualmente</label>
            <select name="educational_level" class="custom-select" id="">
              <option value="Jardín">Jardín</option>
              <option value="Preescolar">Preescolar</option>
              <option value="Básica primaria completa">Básica primaria completa</option>
              <option value="Básica primaria incompleta">Básica primaria incompleta</option>
              <option value="Secundaria completa">Secundaria completa</option>
              <option value="Secundaria incompleta">Secundaria incompleta</option>
              <option value="Técnica">Técnica</option>
              <option value="Tecnológica">Tecnológica</option>
              <option value="Universitaria completa">Universitaria completa</option>
              <option value="Universitaria incompleta">Universitaria incompleta</option>
              <option value="Posgrado completo">Posgrado completo</option>
              <option value="Posgrado incompleto">Posgrado incompleto</option>
              <option value="Ninguno">Ninguno</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">¿Estudia actualmente?</label>
            <br />
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="study_currently"
                id="inlineRadio1"
                value="SI"
              />
              <label class="form-check-label" for="inlineRadio1">Si</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="study_currently"
                id="inlineRadio2"
                value="NO"
              />
              <label class="form-check-label" for="inlineRadio2">No</label>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Grado que cursa actualmente</label>
            <select name="course_study_currently" class="custom-select" id="">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Jornada de estudio</label>
            <select name="study_day" class="custom-select" id="">
              <option value="Mañana">Mañana</option>
              <option value="Tarde">Tarde</option>
              <option value="Noche">Noche</option>
            </select>
          </div>
        </div>

         <div class="form-row">
          <div class="col">
            <label for="">Realiza algún curso actualmente?</label>
            <br />
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="perform_some_course"
                id="inlineRadio1"
                value="SI"
              />
              <label class="form-check-label" for="inlineRadio1">Si</label>
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="perform_some_course"
                id="inlineRadio2"
                value="NO"
              />
              <label class="form-check-label" for="inlineRadio2">No</label>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for="">¿Qué curso?</label>
            <input
              type="text"
              name="wich_course"
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
            name: 'CreateSocialSecurity',
            params: { id: document },
          }"
          >Seguridad Social</router-link
        >
      </div>
    </div>
  </div>
</template>

<script>
import api from "../../../containers/Education";
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