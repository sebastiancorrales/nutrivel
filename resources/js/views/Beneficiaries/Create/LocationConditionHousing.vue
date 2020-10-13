<template>
  <div>
    <!-- <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Ubicación y condiciones de la vivienda</h1>
        <p class="lead">¨*</p>
      </div>
    </div> -->
    <div class="col">
      <form action method="post" @submit="create">
        <div class="form-row">
          <div class="col">
            <label for="">Departamento</label>
            <select name="departament" id="" class="custom-select">
              <option value="Caldas">Caldas</option>
              <option value="Risaralda">Risaralda</option>
              <option value="Quindio">Quindio</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Minicipio</label>
            <select name="state" id="" class="custom-select">
              <option value="Manizales">Manizales</option>
              <option value="Villamaria">Villamaria</option>
              <option value="Neira">Neira</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Zona</label>
            <select name="zone" id="" class="custom-select">
              <option value="Manizales">Manizales</option>
              <option value="Villamaria">Villamaria</option>
              <option value="Neira">Neira</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Comuna</label>
            <select name="commune" id="" class="custom-select">
              <option value="Atardeceres">Atardeceres</option>
              <option value="Ciudadela del Norte">Ciudadela del Norte</option>
              <option value="Cumanday">Cumanday</option>
              <option value="Ecoturistico">Ecoturistico</option>
              <option value="Cerro de Oro">Cerro de Oro</option>
              <option value="La Estación">La Estación</option>
              <option value="la Fuente">la Fuente</option>
              <option value="La Macarena">La Macarena</option>
              <option value="San José">San José</option>
              <option value="Tesorito">Tesorito</option>
              <option value="Universitaria">Universitaria</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Barrio/Vereda</label>
            <input
              type="text"
              name="neighborhood"
              class="form-control"
              required
            />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Dirección domicilio</label>
            <input type="text" name="address" class="form-control" required />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Telefono fijo</label>
            <input type="text" name="telephone" class="form-control" required />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Celular 1 (Personal)</label>
            <input type="text" name="cellphone" class="form-control" required />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Celular 2 (Familiar)</label>
            <input
              type="text"
              name="cellphone_2"
              class="form-control"
              required
            />
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for="">Estrato socioeconómico</label>
            <select name="socioeconomic_stratum" id="" class="custom-select">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Tipo de vivienda</label>
            <select name="housing_type" id="" class="custom-select">
              <option value="Apartamento">Apartamento</option>
              <option value="Inquilinato">Inquilinato</option>
              <option value="Cuarto (s)">Cuarto (s)</option>
              <option value="Institución">Institución</option>
              <option value="Finca">Finca</option>
              <option value="Vivienda tradicional etnica">
                Vivienda tradicional etnica
              </option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Tenencia</label>
            <select name="housing_holding" id="" class="custom-select">
              <option value="Propia, totalmente pagada">
                Propia, totalmente pagada
              </option>
              <option value="Propia, la están pagando">
                Propia, la están pagando
              </option>
              <option value="En arriendo, o subarriendo">
                En arriendo, o subarriendo
              </option>
              <option value="En usufrusto (Prestada)">
                En usufrusto (Prestada)
              </option>
              <option value="Posesión sin título (Invación)">
                Posesión sin título (Invación)
              </option>
              <option value="En usufrusto (Prestada)">
                En usufrusto (Prestada)
              </option>
              <option value="Título de propiedad colectiva">
                Título de propiedad colectiva
              </option>
              <option value="Familiar">Familiar</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label for="">Material estructura</label>
            <select name="housing_material" id="" class="custom-select">
              <option value="Bloque, ladrillo, piedra, madera pulida">
                Bloque, ladrillo, piedra, madera pulida
              </option>
              <option value="Tapia pisada, adobe">Tapia pisada, adobe</option>
              <option value="Bahareque revocado">Bahareque revocado</option>
              <option value="Bahareque sin revocado">
                Bahareque sin revocado
              </option>
              <option value="Madera burda, tabla, tablón">
                Madera burda, tabla, tablón
              </option>
              <option value="Material prefabricado">
                Material prefabricado
              </option>
              <option value="Material mixto">Material mixto</option>
              <option value="Guadua, caña, esterilla, otro vegetal">
                Guadua, caña, esterilla, otro vegetal
              </option>
              <option value="Zinc, tela, cartón, latas, desechos, plástico">
                Zinc, tela, cartón, latas, desechos, plástico
              </option>
              <option value="Sin paredes">Sin paredes</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for="">Material del suelo</label>
            <select name="material_soil" id="" class="custom-select">
              <option value="Alfombra o tapete de pared a pared">
                Alfombra o tapete de pared a pared
              </option>
              <option value="Madera pulida y lacada, parqué">
                Madera pulida y lacada, parqué
              </option>
              <option value="Mármol">Mármol</option>
              <option value="Baldosa, vinilo, tableta, ladrillo">
                Baldosa, vinilo, tableta, ladrillo
              </option>
              <option value="Madera burda, tabla, tablón, otro vegetal">
                Madera burda, tabla, tablón, otro vegetal
              </option>
              <option value="Cemento, gravilla">Cemento, gravilla</option>
              <option value="Tierra, arena">Tierra, arena</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for=""
              >SERVICIO PÚBLICOS CON LOS QUE CUENTA LA VIVIENDA</label
            >
            <div class="form-row">
              <div class="col">
                <label for="">Agua </label>
                <select name="service_water" id="" class="custom-select">
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
              <div class="col">
                <label for="">Luz </label>
                <select name="service_light" id="" class="custom-select">
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
              <div class="col">
                <label for="">Alcantarillado </label>
                <select name="service_sewerage" id="" class="custom-select">
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
              <div class="col">
                <label for="">Gas Natural </label>
                <select name="service_natural_gas" id="" class="custom-select">
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
              <div class="col">
                <label for="">Telefonía </label>
                <select name="service_telephony" id="" class="custom-select">
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
              <div class="col">
                <label for="">Televisión </label>
                <select name="service_tv" id="" class="custom-select">
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
              <div class="col">
                <label for="">Internet</label>
                <select name="service_internet" id="" class="custom-select">
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for=""
              >¿Cuántos cuartos hay incluyendo la sala y el comedor?</label
            >
            <input
              type="number"
              name="quantity_rooms"
              class="form-control"
              required
            />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for=""
              >¿En cuántos cuartos duermen las personas de la vivienda?</label
            >
            <input
              type="number"
              name="number_rooms_where_sleep"
              class="form-control"
              required
            />
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <label for=""
              >¿Con qué servicio sanitario cuenta la vivienda?
            </label>
            <select name="service_sanitary" id="" class="custom-select">
              <option value="Inodoro conectado a alcantarillado">
                Inodoro conectado a alcantarillado
              </option>
              <option value="Inodoro conectado a pozo séptico">
                Inodoro conectado a pozo séptico
              </option>
              <option value="Inodoro sin conexión">Inodoro sin conexión</option>
              <option value="Letrina">Letrina</option>
              <option value="Descarga directa a fuente de agua">
                Descarga directa a fuente de agua
              </option>
              <option value="No tiene servicio sanitario">
                No tiene servicio sanitario
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
            name: 'CreateSocialProgram',
            params: { id: document },
          }"
          >Seguridad Alimentaria</router-link
        >
      </div>
    </div>
  </div>
</template>

<script>
import api from "../../../containers/LocationConditionHousing";
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