<template>
  <div :class="{list_adt_off : activeMode, list_adt : !activeMode}">
    <div class="row">
      <div class="col-lg-5">
          <carouselItem :contentIn="arrayAds[id].content" :photoUrl="arrayAds[id].photos"/>
      </div>

      <div class="col-lg-7">
        <div class="header_adt">
          <h2 class="header_adt_name"> {{ arrayAds[id].title }}</h2>
          <h2 class="header_adt_price">{{ arrayAds[id].price }} ₽</h2>
          <p class="bonus_mobile">
            <span class="plus_icon"></span> Бонус
            {{ arrayAds[id].bonus }} ₽
          </p>
        </div>
        <span class="hr_asato"></span>
        <div class="about_adt">
          <div v-show="!activeMode" class="first_line">
            <p class="adress">
             {{ arrayAds[id].adress }}
            </p>
            <p class="bonus">
              <span class="plus_icon"></span> Бонус
              {{ arrayAds[id].bonus }} ₽
            </p>
          </div>
          <p class="about_text">
            {{ arrayAds[id].about_short }}
          </p>
          <ul class="informer_object">
            <li>
              Этаж
              <span class="flor">    {{ arrayAds[id].flor }} </span>
            </li>
            <li>
              Общая
              <span>
                  {{ arrayAds[id].totalArea }} м
                <sup>2</sup>
              </span>
            </li>
            <li>
              Жилая
              <span>
                  {{ arrayAds[id].liveArea }}
                <sup>2</sup>
              </span>
            </li>
            <li>
              Кухня
              <span>
                 {{ arrayAds[id].kitchenArea }}
                <sup>2</sup>
              </span>
            </li>
          </ul>
        </div>
        <span class="hr_asato"></span>
        <div class="footer_card">
          <div class="info_card">
            <p>№  {{ arrayAds[id].numberId }}</p>
            <p>опубликовано   {{ arrayAds[id].dataPub }}</p>
          </div>
          <router-link  class="more_details" to='/adspage-1'>
            Связаться с автором
            <span class="icon_arrow"></span>
          </router-link >
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import carouselItem from './caroselPhoto'

export default {
components: {
    carouselItem
},
props: {
    arrayAds: {
        type: Array
    },
    id: {
        type: Number
    }
},
computed: {
     activeMode(){
         return this.$store.getters.togglePresentation
     }
}
}
</script>
