<template>
  <div>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Seguridad Social</h1>
        <p class="lead"></p>
      </div>
    </div>
    <div class="col">
      <form action method="post" @submit="create">
        <div class="form-row">
          <div class="col">
            <label for>Regimen de seguridad social</label>
            <select
              name="social_security_scheme_id"
              v-model="form.social_security_scheme_id"
              class="custom-select"
            >
              <option
                v-for="socialSecurityScheme in socialSecurities"
                :key="socialSecurityScheme.id"
                :value="socialSecurityScheme.id"
              >
                {{ socialSecurityScheme.name }}
              </option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Nombre de la EPS</label>
            <input type="text" name="eps_name" class="form-control" required />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Tipo de afiliación</label>
            <select name="afiliation_type" id="" class="custom-select">
              <option value="Cotizante">Cotizante</option>
              <option value="Beneficiario">Beneficiario</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Tiene Sisben</label>
            <select name="has_sisben" id="" class="custom-select">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for="">Puntaje</label>
            <select name="score_sisben" id="" class="custom-select">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for>Diversidad Funcional</label>
            <select
              name="funcional_diversity_id"
              v-model="form.funcionalDivercity"
              class="custom-select"
            >
              <option
                v-for="funcionalDivercity in funcionalDiversities"
                :key="funcionalDivercity.id"
                :value="funcionalDivercity.id"
              >
                {{ funcionalDivercity.name }}
              </option>
            </select>
          </div>
        </div>

        <input type="hidden" v-model="document" name="document_number" />

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
            name: 'CreateMainEconomicSupplier',
            params: { id: document },
          }"
          >Principal Proveedor Económico</router-link
        >
      </div>
    </div>
  </div>
</template>

<script>
import apiSocialSecurityScheme from "../../../containers/SocialSecurityScheme";
import apiFuncionalDiversity from "../../../containers/FuncionalDivercity";
import api from "../../../containers/SocialSecurity";
export default {
  data() {
    return {
      socialSecurities: [],
      funcionalDiversities: {},
      document: 0,
      nextComponent: false,
      form: {
        document_number: null,
        social_security_scheme_id: null,
        funcionalDivercity: null,
      },
    };
  },
  methods: {
    get() {
      this.document = this.$route.params.id;
      this.form.document_number = this.$route.params.id;

      apiSocialSecurityScheme.get().then((data) => {
        this.socialSecurities = data;
      });
      apiFuncionalDiversity.get().then((data) => {
        this.funcionalDiversities = data;
      });
    },
    create(e) {
      e.preventDefault();
      api.store(e.target).then((data) => {
        if (data.status === 200) {
          this.nextComponent = true;
          toastr.success("Se ha creado correctamente"); 

        } else {
          console.log("paila mono");
          toastr.error("Se ha creado correctamente"); 

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