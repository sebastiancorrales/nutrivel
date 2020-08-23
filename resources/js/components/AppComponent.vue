<template>
  <div class="d-flex" id="content-wrapper">
    <div id="sidebar-container" class="bg-primary">
      <div class="logo">
        <h4 class="text-light font-weight-bold mb-0">NUTRIR</h4>
      </div>
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
              href="#"
              class="dropdown dropright nav-link btn-panel-admin dropdown-toggle"
              type="button"
              id="dropdownMenuButton"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="nav-icon fas fa-columns"></i>
              <p>Panel administrativo</p>
              <div class="dropdown-menu dropdown-background" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Unidades de servicio</a>
                <a class="dropdown-item" href="#">Programas</a>
                <a class="dropdown-item" href="#">Convenios</a>
                <a class="dropdown-item" href="#">Tipo de población</a>
                <a class="dropdown-item" href="#">Pertenencia etnica</a>
                <a class="dropdown-item" href="#">Grupo Etario</a>
                <a class="dropdown-item" href="#">Regimen de seguiridad social</a>
                <a class="dropdown-item" href="#">Diversidad funcional</a>
                <a class="dropdown-item" href="#">Vacunas</a>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="w-100">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline position-relative d-inline-block my-2">
              <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar" />
              <button class="btn position-absolute btn-search" type="submit">
                <i class="icon ion-md-search"></i>
              </button>
            </form>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item dropdown">
                <a
                  class="nav-link text-dark dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img
                    src="https://noverbal.es/uploads/blog/rostro-de-un-criminal.jpg"
                    class="img-fluid rounded-circle avatar mr-2"
                  />
                  Diego Velázquez
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Mi perfil</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <!-- Vistas  -->
        <transition name="slide-fade" mode="out-in">
          <router-view :key="$route.fullPath"></router-view>
        </transition>
        <!-- Vistas  -->
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
