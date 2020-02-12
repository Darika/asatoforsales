<template>
  <section class="card_ads">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="bred_cumb">
            <router-link to="/">Главная</router-link>
              <span class="arrow_bred"></span>
              <router-link to="/list-ads">Объявления</router-link>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-9">
          <div class="boxCard_announcement">
            <div class="announcement_head" :class="{'mb-4' : activeMode}">
              <h2>Евродвушка, 52 кв. м., 3/3 эт.</h2>
              <presentationMode />
              <button class="add_favorit"></button>
            </div>
            <span v-show="!activeMode" class="line__asato"></span>
            <p v-show="!activeMode" class="adress_announcement">
              Ростовская область, Ростов-на-Дону, р-н Октябрьский, ул.
              Вавилова
              <a href="#">На карте</a>
            </p>
            <carouselAsato />
              <span class="hr_asato"></span>
              <aboutAd/>
              <span class="hr_asato"></span>
              <fastTabsCard/>
          </div>
          <announcementMaps v-show="!activeMode"/>
        </div>
        <authorBlock/>
      </div>
         <div class="row">
        <anotherAnnouncement />
      </div>
    </div>
  </section>
</template>

<script>
import presentationMode from "@/components/global/presetationMode";
import carouselAsato from "@/components/ads_list/adsItem/adsPage/carouselAsato";
import aboutAd from "@/components/ads_list/adsItem/adsPage/aboutAd"
import fastTabsCard from "@/components/ads_list/adsItem/adsPage/fastTabsCard"
import announcementMaps from "@/components/ads_list/adsItem/adsPage/announcementMaps"
import authorBlock from  "@/components/ads_list/adsItem/adsPage/authorBlock"
import anotherAnnouncement from "@/components/ads_list/adsItem/adsPage/anotherAnnouncement"
export default {
  components: {
    presentationMode,
    carouselAsato,
    aboutAd,
    fastTabsCard,
    announcementMaps,
    authorBlock,
    anotherAnnouncement
  },
   computed: {
     activeMode(){
         return this.$store.getters.togglePresentation
     }
}
};
</script>


