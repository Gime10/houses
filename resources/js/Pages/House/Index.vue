<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
defineProps({
  house: Array,
});
</script>

<template>
  <AppLayout>
    <h1>Mostrar casas para la venta</h1>
    <pre>{{house}}</pre>
  </AppLayout>
</template>
