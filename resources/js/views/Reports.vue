<template>
  <div class="container">
    <div class="row">
      <div class="card m-2 col-md col-sm" style="width: 18rem">
        <div class="card-body">
          <h3 class="card-title">Exportar beneficiarios en PDF</h3>
          <p class="card-text">200 Beneficiarios registrados</p>
          <a href="/beneficiary-list-pdf" class="btn btn-primary">Exportar</a>
        </div>
      </div>
      <div class="card m-2 col-md col-sm" style="width: 18rem">
        <div class="card-body">
          <h3 class="card-title">Exportar beneficiarios en Excel</h3>
          <p class="card-text">200 Beneficiarios registrados</p>
          <a href="/beneficiary-list-excel" class="btn btn-primary">Exportar</a>
        </div>
      </div>
      <div class="card m-2 col-md col-sm" style="width: 18rem">
        <div class="card-body">
          <h3 class="card-title">Valoraciones Nutricionales</h3>
          <p class="card-text">Módulo de valoraciones</p>
          <router-link class="btn btn-primary" :to="{ name: 'NutritionalAssessment' }"
            >Registrar Valoración</router-link
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>