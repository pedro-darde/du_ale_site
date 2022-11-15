<template>
    <div class="container Produtos mt-2" v-if="products.length">
        <h3 class="text-center text-uppercase"> Linha {{ line }}</h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
            <div v-for="product in products" :key="product.id">
                <product
                    :product="product"
                    @iconChanged="onIconChange"
                ></product>
            </div>
        </div>
    </div>
</template>

<script src="./script.js"></script>

<style scoped lang="scss" src="./styles.scss"></style>
