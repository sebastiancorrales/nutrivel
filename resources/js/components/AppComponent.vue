<template>
  <div class="d-flex" id="content-wrapper">
    <div id="sidebar-container" class="menu">
      <panel></panel>
    </div>
    <div class="w-100">

      <div class="container">
        <!-- Vistas  -->
        <transition name="slide-fade" mode="out-in">
          <!-- ... -->
          <router-view :key="$route.fullPath"></router-view>
        </transition>

        <!-- Vistas  -->
      </div>
    </div>
  </div>
</template>

<script>
import Panel from "./Panel";
export default {
  components: { Panel },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>

