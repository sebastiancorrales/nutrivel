<template>
  <div>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Principal Proveedor Económico</h1>
        <p class="lead">¨*</p>
      </div>
    </div>
    <div class="col">
      <form action method="post" @submit="create">
        <div class="form-row">
          <div class="col">
            <label for="">Nombre Completo</label>
            <input type="text" class="form-control" name="name" required />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Ocupación</label>
            <input
              type="text"
              class="form-control"
              name="occupation"
              required
            />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Lugar de trabajo</label>
            <input type="text" class="form-control" name="workplace" required />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Ingresos SMLV</label>
            <select name="income" id="" class="custom-select">
              <option value="Menor a 1 SMLV">Menor a 1 SMLV</option>
              <option value="1 SMLV">1 SMLV</option>
              <option value="2 SMLV">2 SMLV</option>
              <option value="3 SMLV">3 SMLV</option>
              <option value="Más de 3 SMLV">Más de 3 SMLV</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Egresos SMLV</label>
            <select name="expenses" id="" class="custom-select">
              <option value="Menor a 1 SMLV">Menor a 1 SMLV</option>
              <option value="1 SMLV">1 SMLV</option>
              <option value="2 SMLV">2 SMLV</option>
              <option value="3 SMLV">3 SMLV</option>
              <option value="Más de 3 SMLV">Más de 3 SMLV</option>
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
            name: 'CreateFoodSecurity',
            params: { id: document },
          }"
          >Seguridad Alimentaria</router-link
        >
      </div>
    </div>
  </div>
</template>

<script>
import api from "../../../containers/MainEconomicSupplier";
export default {
  data() {
    return {
      document: 0,
      nextComponent: false,
    };
  },
  methods: {
    get() {
      this.document = this.$route.params.id;
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