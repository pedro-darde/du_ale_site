
<template>
    <vueper-slides>
        <vueper-slide
            v-for="(slide, i) in slides"
            :key="i"
            :title="slide.title"
            :content="slide.content">
        </vueper-slide>
    </vueper-slides>
</template>

<script src="./script.js"></script>

<style scoped lang="scss" src="./style.scss"></style>
