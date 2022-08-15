<template>
  <div class="container p-2 overview">
    <div class="row">
      <div class="col-12 col-lg-6 col-xl-6 p-2">
        <image-carousel :urls="getProductImagesUrls(product)"></image-carousel>
      </div>
      <div class="col-12 col-lg-6 col-xl-6 p-5">
        <h1>{{ product.name }}</h1>
        <p>{{ product.description }}</p>
        <h5>{{ $filters.currency_format(product.price) }}</h5>
        <div class="d-flex flex-row justify-content-end">
          <button class="btn btn-duale text-center bg-dark" @click.prevent="sendMessageInfoProduct(product.id)">Mais informações</button>
          <a href="#" class="btn btn-danger ms-2" @click.prevent="favorite">
            <i :class="product.iconClass" style="font-size: 20px"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script src="./script.js">
</script>

<style scoped lang="scss" src="./styles.scss">
</style>
