<template>
    <div class="container Partners">
        <h3 class="text-center text-uppercase">Conheça nossos parceiros</h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
            <div class="w-50">
                <vueper-slides
                    autoplay
                    bullets-outside
                    :dragging-distance="50"
                    loop
                >
                    <vueper-slide
                        v-for="partner in partners"
                        :key="partner.name"
                        :link="partner.site"
                        open-in-new
                    >
                        <template #content>
                            <div
                                class="carousel-item active h-100 d-flex justify-content-center"
                            >
                                <img
                                    class="img-thumbnail p-2"
                                    :title="partner.name"
                                    :src="partner.logo"
                                />
                            </div>
                        </template>
                    </vueper-slide>
                </vueper-slides>
            </div>
        </div>
    </div>
</template>

<script src="./script.js"></script>

<style lang="scss" src="./script.scss"></style>
