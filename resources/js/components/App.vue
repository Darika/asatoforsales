<template>
  <div class="container-fluid p-0">
    <navBar @invisPopUp="signInModal = !signInModal" :visibleModal="signInModal"></navBar>
    <router-view></router-view>
    <transition name="fade">
      <signIn :close="signInModal" @emitClose="signInModal = !signInModal" v-if="signInModal"></signIn>
    </transition>
    <footerAsato/>
  </div>
</template>

<script>
import navBar from "./navBar.vue";
import signIn from "./signIn";
import footerAsato from "./footerAsato";
export default {
  components: {
    navBar,
    signIn,
    footerAsato
  },
  data() {
    return {
      signInModal: false
    };
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

}
</style>
