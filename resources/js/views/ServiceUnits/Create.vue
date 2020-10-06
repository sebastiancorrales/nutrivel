<template>
  <div class="container">
    <h1>CREAR UNIDAD DE SERVICIO</h1>

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
        </div>
      </div>
      <div class="form-row">
        <div class="col-6">
          <label for>Dirección:</label>
          <input
            type="text"
            name="address"
            ref="my_input"
            v-model="form.address"
            class="form-control"
            required
          />
        </div>
      </div>
      <br />
      <button class="btn btn-info">Guardar</button>
    </form>

    <!-- Toast de notificación -->
    <notification-toast></notification-toast>
  </div>
</template>

<script>
import api from "../../containers/ServiceUnit";
import NotificationToast from "../../components/NotificationComponent";

export default {
  components: { NotificationToast },

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
          console.log("creado");
          $(".toast").toast("show");
        } else {
          console.log("paila mono");
        }
      });
    },
  },
};
</script>
