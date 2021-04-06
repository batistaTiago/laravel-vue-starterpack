<template>
  <div class="">

      <!-- Routes definition, for using inertia like a SPA -->
      <inertia-link href="/">Home</inertia-link>
      <inertia-link href="/about">Sobre</inertia-link>
    
    <div>
        <slot />
    </div>


  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>