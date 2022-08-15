
<template>
  <vueper-slides fade :touchable="false" bullets-outside fixed-height="500px">
    <vueper-slide v-for="(url, i) in urls" :key="i">
      <template #content>
        <div class="d-flex flex-column">
          <img :src="url" class="img-fluid" style="height: 460px" />
          <div class="d-flex flex-row justify-content-end">
              <a :href="url" target="__blank">
                <i
                  class="fa fa-arrows maximize-icon"
                  title="Visualizar imagem completa."
                ></i>
              </a>
          </div>
        </div>
      </template>
    </vueper-slide>
  </vueper-slides>
</template>

<script src="./script.js"></script>

<style scoped lang="scss" src="./style.scss"></style>
