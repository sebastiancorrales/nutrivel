<template>
  <div class="container">
    <h1>Información general</h1>

    <form action method="post" @submit="create">
      <input
        type="radio"
        class="btn btn-primary"
        v-model="nextForm"
        :value="true"
      />
      Atrás
      <input
        type="radio"
        class="btn btn-primary"
        v-model="nextForm"
        :value="false"
      />
      Siguiente
      <div v-show="nextForm">
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
      </div>

      <div v-show="!nextForm">
        <div class="row">
          <div class="col-6">
            <div class="form-row">
              <div class="col">
                <label for>Pais de nacimiento</label>
                <select name="country_of_birth" class="custom-select" id>
                  <option value="Colombia">Colombia</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Otro">Otro</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for>Lugar de nacimiento</label>
                <select name="place_of_birth" class="custom-select" id>
                  <option value="Manizales">Manizales</option>
                  <option value="Pereira">Pereira</option>
                  <option value="cali">Cali</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="">Fecha de Nacimiento</label>
                <input
                  type="date"
                  class="form-control col"
                  name="birthday"
                  v-model="form.birthday"
                />
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="">Nacimiento a término</label>
                <input
                  type="text"
                  class="form-control col"
                  name="birth_term"
                  v-model="form.birth_term"
                />
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="">¿Cuántos meses?</label>
                <input
                  type="number"
                  class="form-control col"
                  name="number_months_birth"
                  v-model="form.number_months_birth"
                />
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="">Parentesco con otro familiar</label>
                <input
                  type="radio"
                  class=""
                  value="NO"
                  name="kinship_other_familily"
                />No
                <input
                  type="radio"
                  class=""
                  value="SI"
                  name="kinship_other_familily"
                />SI
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="">Tipología familiar</label>
                <input
                  type="text"
                  class="form-control col"
                  name="family_type"
                />
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="">Población desplazada</label>
                <input
                  type="radio"
                  class=""
                  value="NO"
                  name="displaced_population"
                />No
                <input
                  type="radio"
                  class=""
                  value="SI"
                  name="displaced_population"
                />Si
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="form-row">
              <div class="col">
                <label for="">Peso al ingreso</label>
                <input
                  type="number"
                  class="form-control"
                  name="income_weight"
                  v-model="form.income_weight"
                />
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="">Talla al ingreso</label>
                <input
                  type="number"
                  class="form-control"
                  name="income_size"
                  v-model="form.income_size"
                />
              </div>
            </div>
            <div class="form-row">
              <label for="">Estado nutricional al ingreso</label>
              <textarea
                name="nutritional_state_income"
                class="form-control"
                id=""
                cols="30"
                rows="10"
                v-model="form.nutritional_state_income"
              ></textarea>
            </div>
          </div>
        </div>

        <div class="form-row">
          <button class="btn btn-info">Guardar</button>
        </div>
      </div>
    </form>

    <div v-show="!nextCoponent" class="row">
        <router-link class="btn-options right" :to="{name: 'CreatePopulationData', params:{id: form.document_number}}">Datos Poblacionales</router-link>
    </div>

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
        second_name: null,
        first_last_name: "",
        second_last_name: "",
        document_type: "",
        document_number: "",
        birthday: "",
        birth_term: "",
        number_months_birth: "",
        income_weight: "",
        income_size: "",
        nutritional_state_income: "",
      },
      nextForm: true,
      nextCoponent: false
    };
  },
  methods: {
    create(e) {
      e.preventDefault();

      api.store(e.target).then((data) => {
        if (data.status === 200) {
          console.log("creado");
            // console.log(data);
            // $(".toast").toast("show");
            this.nextCoponent = true;
        } else {
          console.log("paila mono");
        }
      });
    },
  },
};
</script>
