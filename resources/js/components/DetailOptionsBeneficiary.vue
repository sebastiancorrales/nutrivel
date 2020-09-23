<template>
  <div class="row">
    <router-link
      class="btn-options"
      :to="{name: 'DetailBeneficiary',}"
    >Información General</router-link>
    <router-link
      class="btn-options"
      :to="{name: 'InstitutionalInformationDetail',}"
    >Datos Institucionales</router-link>
    <router-link
      class="btn-options"
      :to="{name: 'FamilyStructureDetail',}"
    >Estructura Familiar</router-link>
    <router-link
      class="btn-options"
      :to="{name: 'SocialProgramsDetail',}"
    >Programas Sociales</router-link>
    <router-link
      class="btn-options"
      :to="{name: 'EducationDetail',}"
    >Educación</router-link>
    <router-link
      class="btn-options"
      :to="{name: 'SocialSecurityDetail',}"
    >Seguridad Social</router-link>
    <router-link
      class="btn-options"
      :to="{name: 'MainEconomicSupplier',}"
    >P.P Económico</router-link>
    <router-link
      class="btn-options"
      :to="{name: 'FoodSecurityDetail',}"
    >Seguridad Alimentaria</router-link>
    <router-link
      class="btn-options"
      :to="{name: 'LocationConditionHousing',}"
    >U. Cond. Vivienda</router-link>
  </div>
</template>

<script>
export default {
    name : 'DetailOptionsBeneficiary'
};
</script>

<style>
</style>