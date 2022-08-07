<template>
    <div class="card m-2 product bg-white text-center">
        <h4 class="card-header p-4">{{ product.name }}</h4>
        <div class="card-image">
            <img v-if="product.media.length" :src="product.media[0].original_url" class="img-fluid p-2"
                 :alt="product.id"/>
        </div>
        <div class="card-body">
            <h5 class="card-title text-black-50">{{ $filters.currency_format(product.price) }}</h5>
            <p class="card-text"> {{ product.description }}</p>
        </div>
        <div class="card-footer pull-right">
            <a :href="hrefProduct">
                <i class="fa fa-navicon"></i>
            </a>
        </div>
    </div>
</template>

<script src="./script.js">

</script>

<style lang="scss" scoped src="./styles.scss"></style>
