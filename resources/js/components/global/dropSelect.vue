<template>
  <div v-click-outside="closeContext">
    <label class="label_for_btnDropDown_menu">
      <slot></slot>
    </label>
    <div @click="openContext()" class="btn_dropdown_menu">
      <a href="#">
        <slot name="valueDefault">{{ selected }}</slot>
      </a>
    </div>
    <transition name="fade">
      <div v-if="drop" class="dropdown_menu_context">
        <a
          @click="clickActiveSelect(index, item.items)"
          :key="index"
          :index="index"
          v-for="(item, index) in listSelect"
        >{{ item.items }}</a>
      </div>
    </transition>
  </div>
</template>


<script>
export default {
  props: {
    listSelect: {
      type: Array
    },
    cancelFilters: {
        type: Boolean
    }
  },
  data() {
    return {
      drop: false,
      selected: "Выберите значение"
    };
  },
  methods: {
    openContext() {
      return (this.drop = !this.drop);
    },
    closeContext() {
      return (this.drop = false);
    },
    clickActiveSelect(activeClass, nameBtn) {
      //
      this.selected = nameBtn;
      this.closeContext();
      for (let i in this.listSelect) {
        this.listSelect[i].active = false;
      }
      return (this.listSelect[activeClass].active = true);
    }
  },
  mounted: function(){
       for (let i in this.listSelect) {
       if(!this.listSelect[i].active){
            return console.log('Сейчас ничего нет')
       }
      }
    //   if(this.cancelFilters){
    //        for (let i in this.listSelect) {
    //     this.listSelect[i].active = false;
    //     return console.log('fssd')
    //   }
    //   }
  }
};
// В listSelect передаем массив объектов
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



