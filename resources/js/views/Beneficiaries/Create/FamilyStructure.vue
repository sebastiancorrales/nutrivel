<template>
  <div>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Estructura Familiar</h1>
        <p class="lead">
         Puedes agregar uno o todo el nucleo familiar
        </p>
      </div>
    </div>
    <div class="col">
      <form action method="post" @submit="create">
        <div class="form-row">
          <div class="col">
            <label for="">Nombre Completo</label>
            <input
              type="text"
              class="form-control"
              name="name"
              required
              v-model="form.name"
            />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for>Parentesco familiar</label>
            <select
              name="kinship_family"
              v-model="form.kinship_family"
              class="custom-select"
            >
              <option value="Madre">Madre</option>
              <option value="Hijo-a">Hijo-a</option>
              <option value="Hermano-a">Hermano-a</option>
              <option value="Primo-a">Primo-a</option>
              <option value="Tio-a">Tio-a</option>
              <option value="Sobrino-a">Sobrino-a</option>
              <option value="Abuelo-a">Abuelo-a</option>
              <option value="Nieto-a">Nieto-a</option>
              <option value="Otro">Otro</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Fecha de nacimiento</label>
            <input
              type="date"
              class="form-control"
              name="birthday"
              required
              v-model="form.birthday"
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
            name: 'CreateSocialProgram',
            params: { id: document },
          }"
          >Programas Sociales</router-link
        >
      </div>
    </div>
  </div>
</template>

<script>
import api from "../../../containers/FamilyStructure";
export default {
  data() {
    return {
      typePopulations: [],
      ethnicities: {},
      ageGroups: {},
      document: 0,
      nextComponent: false,
      form: {
        name: null,
        kinship_family: null,
        birthday: null,
        document_number: null,
      },
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