<template>
  <div class="container">
    <h1>Crear tipo de población</h1>

    <form action method="post" @submit="create">
      <div class="form-row">
        <div class="col-6">
          <label for>Nombre:</label>
          <input
            type="text"
            name="name"
            ref="my_input"
            v-model="form.name"
            class="form-control"
            required
          />
          {{ form.name }}
          <br />
          <button class="btn btn-info">Guardar</button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import api from "../../containers/TypePopulation";
// import toastr from "toastr";

export default {
  data() {
    return {
      form: {
        name: "",
        address: "",
      },
    };
  },
  methods: {
    create(e) {
      e.preventDefault();

      api.store(e.target).then((data) => {
        if (data.status === 200) {
          toastr.success("Se ha creado correctamente"); 
        } else {
          toastr.error("Error");
        }
      });
    },
  },
};
</script>
