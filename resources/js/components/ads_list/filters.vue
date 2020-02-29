<template>
  <div>
    <div class="row">
      <div class="col-lg-12">
        <div @click="toggleFilters()" class="filters_ads">
          Фильтры
          <span v-if="visible" class="open_filters">-</span>
          <span v-else class="open_filters">+</span>
        </div>
      </div>
    </div>
    <transition name="fade">
      <div v-show="visible" class="filters_item">
        <div class="row">
          <div class="col-12 col-lg-4 mb-4">
            <dropSelect :listSelect="filtersCity">

                Сортировка</dropSelect>
          </div>
          <div class="col-12 col-lg-4 mb-4">
            <dropSelect  :listSelect="filtersCity">Настройка</dropSelect>
          </div>
          <div class="col-12 col-lg-4 mb-4">
            <dropSelect :listSelect="filtersCity">Значение</dropSelect>
          </div>
        </div>
        <span class="hr_asato"></span>
        <div class="row">
          <div class="ml-auto">
            <button class="cancelFilter mr-4">Сбросить Фильтры</button>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
import dropSelect from "../global/dropSelect";

export default {
  components: {
    dropSelect
  },
  data() {
    return {
      visible: false,
      filtersCity: [
        { items: "Все объявления", active: false },
        { items: "Квартиры", active: false },
        { items: "Дома", active: false },
        { items: "Земельные участки", active: false },
        { items: "Коммерческая недвижемость", active: false },
        { items: "Новостройки", active: false }
      ]
    };
  },
  methods: {
    toggleFilters() {
      return (this.visible = !this.visible);
    },

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
