<template>
  <!-- Компонент свитчера презентации — включает презентацию   -->
  <div  class="presentation">
    <input @click="activeted" class="switch" type="checkbox" :checked="activeMode"  id="switch" />
    <label class="label_switch" for="switch">Toggle</label>
    <label class="label_for_switch" for="switch">Режим презентации</label>
  </div>
</template>
<script>
import { mapMutations } from 'vuex';
export default {
 computed: {
     activeMode(){
         return this.$store.getters.togglePresentation
     }
 },
 methods: {
     ...mapMutations(['activeted'])
 }
};
</script>
