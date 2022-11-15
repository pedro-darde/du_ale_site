<template>
    <div class="container Lines">
        <h3 class="text-center text-uppercase text-black">Nossas linhas</h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
            <div v-for="line in lines" :key="line.name">
                <div class="card m-2 product bg-dark text-center">
                    <div class="card-header text-uppercase">
                        <h4>{{ line.name }}</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ line.about }}</h5>
                        <a
                            :href="`/products/${line.slug}`"
                            class="btn btn-duale"
                        >
                            Visualizar linha
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script src="./script.js"></script>

<style scoped lang="scss" src="./styles.scss"></style>
