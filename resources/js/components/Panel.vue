<template>
  <div class="menu">
    <ul
      class="nav nav-pills nav-sidebar flex-column"
      data-widget="treeview"
      role="menu"
      data-accordion="false"
    >
      <li class="nav-item">
        <router-link :to="{ name: 'home' }" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Inicio
            <i class="right"></i>
          </p>
        </router-link>
      </li>
      <router-link :to="{ name: 'beneficiaries' }" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>
          Beneficiarios
          <i class="right"></i>
        </p>
      </router-link>

      <li class="nav-item">
        <router-link class="nav-link" :to="{ name: 'IndexPrograms' }">
          <i class="nav-icon fas fa-home"></i>
          Programas
          <i class="right"></i>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link :to="{ name: 'reports' }" class="nav-link">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Informes
            <i class="right"></i>
          </p>
        </router-link>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-newspaper"></i>
          <p>
            Novedades
            <i class="right"></i>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-address-card"></i>
          <p>
            Caracterización
            <i class="right"></i>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link"
          data-toggle="collapse"
          href="#administration-options"
          role="button"
          aria-expanded="false"
          aria-controls="administration-options"
        >
          <i class="nav-icon fas fa-address-card"></i>
          Administración
          <i class="right"></i>
        </a>
        <div class="collapse" id="administration-options">
          <router-link class="nav-link" :to="{ name: 'IndexServiceUnit' }"
            >Unidades de servicio</router-link
          >
          <router-link class="nav-link" :to="{ name: 'IndexCovenant' }"
            >Convenios</router-link
          >
          <router-link class="nav-link" :to="{ name: 'TypePopulation' }"
            >Tipo de población</router-link
          >
          <router-link class="nav-link" :to="{ name: 'IndexEthnicity' }"
            >Pertenencia Etnica</router-link
          >
          <router-link class="nav-link" :to="{ name: 'IndexAgeGroup' }"
            >Grupos Etarios</router-link
          >
          <router-link class="nav-link" :to="{ name: 'IndexPrograms' }"
            >Programas</router-link
          >
          <router-link
            class="nav-link"
            :to="{ name: 'IndexSocialSecurityScheme' }"
            >Regimen de seguridad social</router-link
          >
          <router-link
            class="nav-link"
            :to="{ name: 'IndexFuncionalDivercity' }"
            >Diversidad Funcional</router-link
          >
          <router-link class="nav-link" :to="{ name: 'IndexVaccination' }"
            >Vacunas</router-link
          >
        </div>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "panel",
};
</script>
