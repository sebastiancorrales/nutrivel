<template>
  <div class="d-flex" id="content-wrapper">
    <div id="sidebar-container" class="bg-primary">
      <div class="logo">
        <h4 class="text-light font-weight-bold mb-0">NUTRIR</h4>
      </div>
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

