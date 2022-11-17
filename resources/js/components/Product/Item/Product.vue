<template>
  <div class="card m-2 product bg-dark text-center">
    <h5 class="card-header p-4 text-uppercase">{{ product.name }}</h5>
    <div class="card-image">
      <img
        v-if="product.media.length"
        :src="product.media[0].original_url"
        class="img-fluid p-2"
        :alt="product.id"
      />
    </div>
    <div class="card-body">
      <h5 class="card-title text-black text-uppercase">
        {{ $filters.currency_format(product.price) }}
      </h5>
      <p class="card-text">{{ product.description }}</p>
    </div>
    <div class="card-footer d-flex flex-row justify-content-end">
      <a href="#" @click.prevent="favorite"> 
        <i
          :class="product.iconClass"
          title="Visualizar detalhes do produto."
        ></i>
      </a>
      <a :href="hrefProduct">
        <i
          class="fa fa-external-link p-2"
          title="Visualizar detalhes do produto."
        ></i>
      </a>
    </div>
  </div>
</template>

<script src="./script.js">
</script>

<style lang="scss" scoped src="./styles.scss"></style>
