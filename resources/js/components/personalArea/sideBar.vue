<template>
  <div class="col-lg-auto col-xl-4 col-md-6">
    <div class="left_panel">
      <h2>Личный кабинет</h2>
      <span class="line__asato"></span>
      <div class="user_status">
        <img src="images/user_photo_default.svg" alt="user img" />
        <h3>{{getData.name }}</h3>
        <p>Продавец</p>
      </div>
      <span class="hr_asato"></span>
      <ul>
        <li @click="switchBar('favoritesBar')" class="favorit_item_menu">
          <a href="#">Избранное</a>
          <span class="informer_dot">35</span>
        </li>
        <li class="message_item_menu">
          <a href="#">Сообщения</a>
          <span class="informer_dot">2</span>
        </li>
        <li @click="switchBar('settingBar')" class="user_item_menu">
          <a href="#">Профиль</a>
        </li>
        <!-- <li class="setting_item_menu" ><a href="#">Настройки</a></li> -->
        <li class="out_item_menu">
          <a href="#">Выход</a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: ['onLoadBar'],
  data() {
    return {
      isBar: 'settingBar'
    };
  },
  computed: {
    getData() {
      return this.$store.getters.getData;
    }
  },
  methods: {
    switchBar(view) {
      this.isBar = view
      this.onLoadBar( {
          current: this.isBar
      })
      
    }
  }
};
</script>
