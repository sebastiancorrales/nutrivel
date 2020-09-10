<template>
  <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
    <div class="toast bg-success" style="position: absolute; top: 0; right: 0;" data-delay="3000">
      <div class="toast-header">
        <strong class="mr-auto">Nutrir Soft</strong>
        <small>Ahora</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body">Registro guardado con éxito</div>
    </div>
  </div>
</template>
<script>
export default {
  name: "NotificationToast",
};
</script>

<style>
</style>