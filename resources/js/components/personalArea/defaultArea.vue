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
            <settingBar/>
      </div>
    </div>
  </section>
</template>

<script>
import sideBar from "./sideBar";
import settingBar from "./settingBar"
export default {
  components: {
    sideBar,
    settingBar
  }
};
</script>