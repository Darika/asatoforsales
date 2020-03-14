<template>
  <section class="user_area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="bred_cumb">
            <a href="index.html">Главная</a>
            <span class="arrow_bred"></span>
            <a href="#">Личный кабинет</a>
          </div>
        </div>
      </div>
      <div class="row">
          <sideBar/>
          <component :is="currentBar"> </component>
            <!-- <settingBar/>
            <favoritesBar/> -->
      </div>
    </div>
  </section>
</template>

<script>
import sideBar from "./sideBar";
import settingBar from "./settingBar"
import favoritesBar from "./favoritesBar"
export default {
  components: {
    sideBar,
    settingBar,
    favoritesBar
  },
  data(){
      return {
          currentBar: 'settingBar'
      }
  },
  methods: {
      switchBar(view){
          return this.currentBar = view
      }
  }
};
</script>
