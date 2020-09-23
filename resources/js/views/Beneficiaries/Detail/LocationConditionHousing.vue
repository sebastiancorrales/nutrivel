<template>
  <div class="container-fluid">
    <h2>{{beneficiary.first_name}} {{beneficiary.second_name}} {{beneficiary.first_last_name}} {{beneficiary.second_last_name}}</h2>
    <hr />
    <DetailOptionsBeneficiary></DetailOptionsBeneficiary>
    <div class="row">
      <div class="col">
        <div v-for="location in location_condition_housing" :key="location.id">
          <div class="card m-2">
            <div class="card-body">
              <h5 class="card-title">
                <strong>Ubicación y condiciones de la vivienda:</strong>
              </h5>
              <div class="col">
                <h3>
                  <strong>Zona:</strong>
                  {{location.zone}}
                </h3>
                <h3>
                  <strong>Barrio:</strong>
                  {{location.neighborhood}}
                </h3>
                <h3>
                  <strong>Dirección:</strong>
                  {{location.address}}
                </h3>
                <h3>
                  <strong>Comuna:</strong>
                  {{location.commune}}
                </h3>
                <h3>
                  <strong>Telefono:</strong>
                  {{location.telephone}}
                </h3>
                <h3>
                  <strong>Celular</strong>
                  {{location.cellphone}}
                </h3>
                <h3>
                  <strong>Celular 2</strong>
                  {{location.cellphone2}}
                </h3>
                <h3>
                  <strong>Estrato Socioeconomico</strong>
                  {{location.socioeconomic_stratum}}
                </h3>
                <h3>
                  <strong>Tipo de vivienda</strong>
                  {{location.housing_type}}
                </h3>
                <h3>
                  <strong>Material Estructura</strong>
                  {{location.housing_holding}}
                </h3>
                <h3>
                  <strong>Material del suelo</strong>
                  {{location.material_soil}}
                </h3>

                <h3>Servicio públicos</h3>
                <h3>
                  <strong>Agua</strong>
                  {{location.service_water}}
                </h3>
                <h3>
                  <strong>Alcantarillado</strong>
                  {{location.service_sewerage}}
                </h3>
              </div>
              <div class="col-4">
                <h3>
                  <strong>gas Natural</strong>
                  {{location.service_natural_gas}}
                </h3>
                <h3>
                  <strong>Telefono:</strong>
                  {{location.service_telephony}}
                </h3>
                <h3>
                  <strong>Televisión</strong>
                  {{location.service_tv}}
                </h3>
                <h3>
                  <strong>Internet</strong>
                  {{location.service_internet}}
                </h3>
                <h3>
                  <strong>Servicio Sanitario</strong>
                  {{location.service_sanitary}}
                </h3>
                <h3>
                  <strong>Cantidad de cuartos</strong>
                  {{location.quantity_rooms}}
                </h3>
                <h3>
                  <strong>¿En cuántos cuartos duermen las personas de la vivienda?</strong>
                  {{location.number_rooms_where_sleep}}
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import api from "../../../containers/Beneficiary";
import DetailOptionsBeneficiary from "../../../components/DetailOptionsBeneficiary";
export default {
  components: { DetailOptionsBeneficiary },
  data() {
    return {
      beneficiary: {},
      location_condition_housing: {},
    };
  },
  methods: {
    get() {
      const id = this.$route.params.id;
      api.find(id).then((data) => {
        this.beneficiary = data;
        this.location_condition_housing = this.beneficiary.location_condition_housing;
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