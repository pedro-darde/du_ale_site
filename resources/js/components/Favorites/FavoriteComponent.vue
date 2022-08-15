<template>
  <div
    class="collapse navbar-collapse justify-content-end"
    id="navbarNavDropdown"
  >
    <div class="d-flex">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle text-light"
            href="#"
            id="navbarDropdown"
            role="button"
            data-bs-toggle="dropdown"
            data-bs-auto-close="outside"
            @click="loadFavoritos"
          >
            <b> Favoritos</b>
          </a>
          <ul
            class="dropdown-menu dropdown-menu-lg-end"
            aria-labelledby="navbarDropdown"
          >
            <li
              v-if="favorites.length"
              v-for="favorite in favorites"
              :key="favorite.id"
              class="d-flex flex-row"
            >
              <a :href="getHrefProduct(favorite.id)" class="dropdown-item">
                {{ favorite.name }}
              </a>
              <i
                class="fa fa-remove p-2"
                style="cursor: pointer"
                @click="removeFavorite(favorite.id)"
              ></i>
            </li>
            <li v-else>
              <a href="#" class="dropdown-item"> Nenhum favorito </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</template>

<script src="./script.js"></script>

<style scoped lang="scss" src="./styles.scss">
</style>