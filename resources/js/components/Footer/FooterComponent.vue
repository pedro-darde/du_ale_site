<template>
  <div class="container p-2 footer">
    <footer
      class="
        d-flex
        flex-wrap
        justify-content-between
        align-items-center
        py-3
        my-4
        border-top
      "
    >
      <p class="col-md-4 mb-0 text-muted">Duale Churrasqueiras e Parrillas</p>

      <a
        href="/"
        class="
          col-md-4
          d-flex
          align-items-center
          justify-content-center
          mb-3 mb-md-0
          me-md-auto
          link-dark
          text-decoration-none
        "
      >
          <img :src="logoImage" alt="Logo Image"
               width="40"
               height="34"
               class="d-inline-block align-text-top rounded" />
      </a>

      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item">
          <a href="/" class="nav-link px-2 text-muted"><i class="fa fa-home m-2"></i>Home</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link px-2 text-muted" @click="askAbout"><i class="fa fa-whatsapp m-2"></i>WhatsApp</a>
        </li>
        <li class="nav-item">
          <a :href="INSTAGRAM_URL" class="nav-link px-2 text-muted"><i class="fa fa-instagram m-2"></i>Instagram</a>
        </li>
      </ul>
    </footer>
  </div>
</template>

<script src="./script.js"></script>
<style scoped lang="scss" src="./styles.scss">
</style>
