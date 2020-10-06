<template>
  <div class="container">
    <form action method="post" @submit="update">
      <div class="form-row">
        <div class="col-6">
          <label for>Nombre:</label>
          
          <input
            type="text"
            name="name"
            ref="my_input"
            v-model="form.name"
            defaultValue
            class="form-control"
            required
          />
          <br />
          <button class="btn btn-info">Guardar</button>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import api from "../../containers/Ethnicity";
export default {
  data() {
    return {
      id: this.$route.params.id,
      form: {
        name: "",
      },
      data: {},
    };
  },
  methods: {
    update(e) {
      e.preventDefault();
      api.update(e.target, this.id).then((data) => {
        if (data.status === 200) {
          console.log("Actualizado");
          $(".toast").toast("show");
        } else {
          console.log("paila mono");
        }
      });
    },
    get() {
      api.find(this.id, "edit").then((data) => {
        this.data = data;
        this.form.name = data.name;
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