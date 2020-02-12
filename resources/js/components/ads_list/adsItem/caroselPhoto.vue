<template>
  <div  :class="{imgs_adt_off : activeMode, imgs_adt : !activeMode  }">
    <div class="informer_icons">
      <ul>
        <li  class="photo_info">
          {{ contentIn.photosIn.quantity }}
          <span>фото</span>
        </li>
        <li v-show="contentIn.video.availability" class="video_info">
          {{ contentIn.video.quantity }}
          <span>видео</span>
        </li>
        <li v-show="contentIn.tour.availability"  class="dd_info">
          <span>3D тур</span>
        </li>
        <li v-show="contentIn.aero.availability" class="coopter_info">
          <span>Аэросъемка</span>
        </li>
      </ul>
    </div>

    <!-- Цикл принимает массив фотографий с компонента adsPage черех компонент adsItem -->

    <agile :navButtons="false" :dots="false" :fade="false" ref="carousel">
      <div v-for="(photo, index) in photoUrl" :key="index" class="slide-out">
        <img :src="photo" />
      </div>
    </agile>
    <!-- Цикл принимает массив фотографий с компонента adsPage черех компонент adsItem -->

    <div class="control_card">
      <button class="add_favorit"></button>
      <div class="slider_control">
        <button @click="$refs.carousel.goToPrev()" class="prev_photo"></button>
        <button @click="$refs.carousel.goToNext()" class="next_photo"></button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "carouselItem",
  props: {
    photoUrl: {
      type: Array
    },
    contentIn: {
        type: Object
    }
  },
  computed: {
     activeMode(){
         return this.$store.getters.togglePresentation
     }
}
};
</script>
