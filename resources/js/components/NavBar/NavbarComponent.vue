<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand text-uppercase" href="/">
        <img
          :src="logoImage"
          alt=""
          width="30"
          height="24"
          class="d-inline-block align-text-top rounded"
        />
        Duale Churrasqueiras e Parrillas
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <favorites></favorites>
    </div>
  </nav>
</template>

<script src="./script.js"></script>

<style scoped src="./styles.scss" lang="scss">
</style>
