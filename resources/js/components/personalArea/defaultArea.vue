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
          <sideBar :onLoadBar="onLoadBar"/>
          <component  :is="currentBar"> </component>
      </div>
    </div>
  </section>
</template>

<script>
import sideBar from "./sideBar";
import settingBar from "./settingBar"
import favoritesBar from "./favoritesBar"
export default {
  props: {
    currentRoute: {
      type: String,
      default: 'settingBar'
    }
  },
  components: {
    sideBar,
    settingBar,
    favoritesBar
  },
  data(){
      return {
          currentBar: this.currentRoute,
          
      }
  },
  methods: {
    onLoadBar(data){
        this.currentBar = data.current
    }
  }
};
</script>
