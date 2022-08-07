<template>
    <div class="container p-2">
        <div class="row">
            <div class="col">
                <image-carousel :urls="getProductImagesUrls(product)"></image-carousel>
            </div>
            <div class="col">
                <h1>{{ product.name }}</h1>
            </div>
        </div>
    </div>
</template>

<script src="./script.js">

</script>

<style scoped lang="scss" src="./styles.scss">

</style>
