<template>
  <div class="container">
    <h1>Información general</h1>

    <form action method="post" @submit="create">
      <div class="form-row">
        <div class="col-6">
          <label for>Primer Nombre:</label>
          <input
            type="text"
            name="first_name"
            v-model="form.first_name"
            class="form-control"
            required
          />
        </div>
      </div>
      <div class="form-row">
        <div class="col-6">
          <label for>Segundo Nombre:</label>
          <input
            type="text"
            name="second_name"
            v-model="form.second_name"
            class="form-control"
            required
          />
        </div>
      </div>
      <div class="form-row">
        <div class="col-6">
          <label for>Primer Apellido:</label>
          <input
            type="text"
            name="first_last_name"
            v-model="form.first_last_name"
            class="form-control"
            required
          />
        </div>
      </div>
      <div class="form-row">
        <div class="col-6">
          <label for>Segundo Apellido:</label>
          <input
            type="text"
            name="second_last_name"
            v-model="form.second_last_name"
            class="form-control"
            required
          />
        </div>
      </div>
      <div class="form-row">
        <div class="col-6">
          <label for>Tipo de documento</label>
          <select name="document_type" class="custom-select" id>
            <option value="TI">TI (Tarjeta de identidad)</option>
            <option value="CC">CC (Cédula de ciudadanía)</option>
            <option value="CE">CE (Cédula de extranjería)</option>
            <option value="PASAPORTE">Pasaporte</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="col-6">
          <label for>Número de documento</label>
          <input
            type="number"
            name="document_number"
            v-model="form.document_number"
            class="form-control"
            required
          />
        </div>
      </div>
      <div class="form-row">
        <div class="col-6">
          <label for>Genero</label>
          <select name="gender" class="custom-select" id>
            <option value="FEMENINO">FEMENINO</option>
            <option value="MASCULINO">MASCULINO</option>
            <option value="Otro">Otro</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="col-6">
          <label for>Estado Civil</label>
          <select name="civil_status" class="custom-select" id>
            <option value="Soltero">Soltero</option>
            <option value="Casadp">Casado</option>
            <option value="Otro">Otro</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <button class="btn btn-info">Guardar</button>
      </div>
    </form>

    <!-- Toast de notificación -->
    <!-- <notification-toast></notification-toast> -->
  </div>
</template>

<script>
import api from "../../containers/Beneficiary";
import NotificationToast from "../../components/NotificationComponent";

export default {
  components: { NotificationToast },

  data() {
    return {
      form: {
        first_name: "",
        second_name: "",
        first_last_name: "",
        second_last_name: "",
        document_type: "",
        document_number: "",
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
          console.log(data);
          // $(".toast").toast("show");
        } else {
          console.log("paila mono");
        }
      });
    },
  },
};
</script>
