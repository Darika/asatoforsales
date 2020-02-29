<template>
  <div class="row">
    <div class="col-lg-12">
      <div class="fast_tabs">
        <button @click="droppedFast()" class="dropdown_menu_tabs">{{ btnDrop }}</button>
        <ul :class="{ fast_mobile: styleDrop }" class="fast_tabs_list">
          <li
            @click="clickActiveCategory(index, item.items)"
            :class="{ active_tabs: item.active}"
            :key="index"
            :index="index"
            v-for="(item, index) in fastList"
          >{{ item.items }}</li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      btnDrop: "Категории",
      fastList: [
        { items: "Все объявления", active: false },
        { items: "Квартиры", active: false },
        { items: "Дома", active: false },
        { items: "Земельные участки", active: false },
        { items: "Коммерческая недвижемость", active: true },
        { items: "Новостройки", active: false }

      ],
      styleDrop: false
    };
  },
  methods: {
    droppedFast() {
      return (this.styleDrop = !this.styleDrop);
    },
    clickActiveCategory(activeClass, nameBtn) {
      //
      this.btnDrop = nameBtn;
      this.droppedFast();
      for (let i in this.fastList) {
        this.fastList[i].active = false;
      }
      return (this.fastList[activeClass].active = true);
    }
  }
};
</script>

