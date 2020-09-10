<template>
  <div class="menu">
    <ul
      class="nav nav-pills nav-sidebar flex-column"
      data-widget="treeview"
      role="menu"
      data-accordion="false"
    >
      <li class="nav-item">
        <router-link :to="{name:'home'}">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Inicio
            <i class="right"></i>
          </p>
        </router-link>
      </li>
      <router-link :to="{name:'beneficiarios'}">
        <i class="nav-icon fas fa-home"></i>
        <p>
          Beneficiarios
          <i class="right"></i>
        </p>
      </router-link>

      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-th-large"></i>
          <p>
            Programas
            <i class="right"></i>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-flag"></i>
          <p>
            Informes
            <i class="right"></i>
          </p>
        </a>
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
          <a class="nav-link" href="#">Unidades de servicio</a>
          <a class="nav-link" href="#">Programas</a>
          <a class="nav-link" href="#">Convenios</a>
          <router-link class="nav-link" :to="{name:'TypePopulation'}">Tipo de población</router-link>
          <a class="nav-link" href="#">Pertenencia etnica</a>
          <a class="nav-link" href="#">Grupo Etario</a>
          <a class="nav-link" href="#">Regimen de seguiridad social</a>
          <a class="nav-link" href="#">Diversidad funcional</a>
          <a class="nav-link" href="#">Vacunas</a>
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
