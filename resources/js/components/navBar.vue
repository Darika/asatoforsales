<template>
  <div v-click-outside="closeMenuUser">
    <nav>
      <router-link  to="/">
        <img src="images/logo.png" alt="logo" />
      </router-link >

      <ul class="menu__desktop">
        <li>

          <router-link to="/list-ads">Объявления</router-link>
        </li>
        <li>
          <a href="#">Статьи</a>
        </li>
        <li>
          <a href="#">Агенства-партнеры</a>
        </li>
        <li>
           <a href="#">Карьева в ASATO</a>
        </li>
        <li>
          <router-link to="/test-car" href="#">Контакты</router-link>
        </li>
      </ul>

      <div v-if="loginOn" class="ml-auto menu__desktop__user">
        <div  @click="dropdownMenu = !dropdownMenu" class="user_menu">
          <img src="images/user_photo_default.svg" alt="user_ava" />
          <h3>{{ userParams.nameUser }}</h3>
          <span>{{ userParams.roleUser }}</span>
          <i  class="drop_arrow"></i>
            <transition name="fade">
          <div v-show="dropdownMenu" class="dropdownMenu">
                    <ul>
                    <li class="favorit_item_menu">
                        <a href="#">Избранное</a>
                    </li>
                    <li class="message_item_menu">
                        <a href="#">Сообщения</a>
                    </li>
                    <li class="user_item_menu">
                         <router-link to="/personal-area">Профиль</router-link>
                    </li>
                    <!-- <li class="setting_item_menu">
                        <a href="#">Настройки</a>
                    </li> -->
                    <li class="out_item_menu">
                        <a href="#">Выход</a>
                    </li>
                    </ul>
          </div>
          </transition>
        </div>

        <ul class="snippet_user">
          <li class="favorites_user">
            <span class="counter_notification"></span>
          </li>
          <li class="message_user">
            <span class="counter_notification"></span>
          </li>
        </ul>
      </div>

      <ul v-else class="ml-auto menu__desktop">
        <li>
          <a @click="openModalSignIn()" class="sign_in" href="#">Вход</a>
        </li>
      </ul>

      <div v-if="showBar" class="menu__mobile">
        <ul class="menu__mobile__list">
          <li>
             <router-link to="/list-ads">Объявления</router-link>
          </li>
          <li>
            <a href="#">Статьи</a>
          </li>
          <li>
            <a href="#">Агенства-партнеры</a>
          </li>
          <li>
            <a href="#">Карьева в ASATO</a>
          </li>
          <li>
            <a href="#">Контакты</a>
          </li>
          <li class="user_menu">

           <img src="images/user_photo_default.svg" alt="user_ava" />
          <h3>{{ userParams.nameUser }}</h3>
          <span>{{ userParams.roleUser }}</span> </li>
                <li class="favorit_item_menu">
                        <a href="#">Избранное</a>
                    </li>
                    <li class="message_item_menu">
                        <a href="#">Сообщения</a>
                    </li>
                    <li class="user_item_menu">
                      <router-link to="/personal-area">Профиль</router-link>
                    </li>
                    <!-- <li class="setting_item_menu">
                        <a href="#">Настройки</a>
                    </li> -->
                    <li class="out_item_menu">
                        <a href="#">Выход</a>
                    </li>


          <li  class="sign_in_mobile">
            <a href="#">Вход</a>
          </li>
        </ul>
        <button @click="showNav()" class="close_burger"></button>
      </div>

      <button @click="showNav()" class="burger__menu__icon ml-auto"></button>
    </nav>
  </div>
</template>

<script>

export default {

  props: {
    visibleModal: {
      type: Boolean,
      default: false
    }
  },
  data() {
    return {
      showBar: false,
      signInModal: false,
      loginOn: true,
      dropdownMenu: false,
      userParams: {
          nameUser: "Александр Савченко",
          roleUser: "Продавец"

      }
    };
  },
  methods: {
    showNav() {
      return (this.showBar = !this.showBar);
    },
    openModalSignIn() {
      this.signInModal = !this.signInModal;
      this.$emit("invisPopUp", this.visibleModal);
    },
    closeMenuUser(){
        return this.dropdownMenu = false
    }
  }
};
</script>

<style>
.fade-enter-active,
.fade-leave-active {
  transition: all 0.2s ease-in-out;

}
.fade-enter,
.fade-leave-to {
  opacity: 0;
    transform: translateY(-10px)
}
</style>
