<template>
  <div>
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
    <div class="info_tabs">
      <ul>
        <li>
          Этаж
          <span>3/3</span>
        </li>
        <li>
          Общая пл.
          <span>
            12,6 м
            <sup>2</sup>
          </span>
        </li>
        <li>
          Жилая пл.
          <span>
            12,6 м
            <sup>2</sup>
          </span>
        </li>
        <li>
          Кухня
          <span>
            12,6 м
            <sup>2</sup>
          </span>
        </li>
        <li>
          Год постройки
          <span>2008</span>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      btnDrop: "Категории",
      fastList: [
        { items: "Общее", active: false },
        { items: "Интерьер", active: false },
        { items: "Экстерьер", active: false },
        { items: "О документах", active: false },
        { items: "Территория", active: true },
        { items: "Коммуникации", active: false },
          { items: "Инфаструктура", active: false }
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
