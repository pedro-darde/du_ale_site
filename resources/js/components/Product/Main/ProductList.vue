<template>
    <div class="container">
        <div class="d-flex flex-row flex-wrap justify-content-center">
            <div v-for="product in products">
                <product :product="product" @iconChanged="onIconChange"></product>
            </div>
        </div>
    </div>
</template>

<script src="./script.js">
</script>

<style scoped lang="scss" src="./styles.scss">
</style>
