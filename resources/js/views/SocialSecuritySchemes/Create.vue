<template>
  <div class="container">
    <h1>CREAR REGIMEN DE SEGURIDAD SOCIAL</h1>

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

    <!-- Toast de notificación -->
    <notification-toast></notification-toast>
  </div>
</template>

<script>
import api from "../../containers/SocialSecurityScheme";
import NotificationToast from "../../components/NotificationComponent";

export default {
  components: { NotificationToast },

  data() {
    return {
      form: {
        name: "",
      },
    };
  },
  methods: {
    create(e) {
      e.preventDefault();

      api.store(e.target).then((data) => {
        if (data.status === 200) {
          console.log("creado");
          $(".toast").toast("show");
          this.form.name = "";
        } else {
          console.log("paila mono");
        }
      });
    },
  },
};
</script>
