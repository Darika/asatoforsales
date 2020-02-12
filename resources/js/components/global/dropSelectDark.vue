<template>
<!-- Компонент выпадающего меню для сортировки списков -->
  <div v-click-outside="closeContext">
    <button @click="toggleDrop()" class="sort_btn">
      Отсортированно
      <slot name="valueDefault">{{ selected }}</slot>
    </button>
    <transition name="fade">
      <div v-show="drop" class="contextMenuSelect">
        <a
          @click="clickActiveSelect(index, item.items)"
          :key="index"
          :index="index"
          v-for="(item, index) in listSort"
        >{{ item.items }}</a>
      </div>
    </transition>
  </div>
</template>


<script>
export default {
  props: {
    listSort: {
      type: Array
    }
  },
  data() {
    return {
      selected: "по умолчанию",
      drop: false
    };
  },
  methods: {
    closeContext() {
      return (this.drop = false);
    },
    toggleDrop() {
      return (this.drop = !this.drop);
    },
    clickActiveSelect(activeClass, nameBtn) {
      //
      this.selected = nameBtn;
      this.closeContext();
      for (let i in this.listSort) {
        this.listSort[i].active = false;
      }
      return (this.listSort[activeClass].active = true);
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
}
</style>
