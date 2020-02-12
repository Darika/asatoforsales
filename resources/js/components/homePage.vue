<template>
  <div>
    <header>
      <headerHome
        @invisVideo="presentationVisible = !presentationVisible"
        :visibleModalVideo="presentationVisible"
      />
    </header>

    <transition name="fade">
      <presentation
        :closeVideo="presentationVisible"
        @emitCloseVideo="presentationVisible = !presentationVisible"
        v-if="presentationVisible"
      />
    </transition>
    <promoBox />
    <sliderAsato />
    <clientHome />
  </div>
</template>

<script>
import headerHome from "./home/headerHome";
import promoBox from "./home/promoBox";
import sliderAsato from "./home/sliderAsato";
import clientHome from "./home/clientsHome";
import presentation from "./home/presentation";
export default {
  components: {
    promoBox,
    sliderAsato,
    clientHome,
    presentation,
    headerHome
  },
  data() {
    return {
      presentationVisible: false
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

