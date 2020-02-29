<template>
  <div>
    <label class="label_for_btnDropDown_menu">
      <slot></slot>
    </label>

    <el-select v-model="selected" placeholder="Выберите значение">
      <el-option
        v-for="item in listSelect"
        :key="item.items"
        :label="item.items"
        :value="item.items"
      ></el-option>
    </el-select>
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
  }
};
// В listSelect передаем массив объектов
</script>




