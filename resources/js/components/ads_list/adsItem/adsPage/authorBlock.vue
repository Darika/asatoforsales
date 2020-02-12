<template>
  <div class="col-xl-3 col-lg-9 pl-xl-0">
    <div class="box_author">
      <h2>2 399 000 ₽</h2>
      <p class="pre_info">
        40 385 р/м2
        <span v-show="!activeMode">
          Бонус
          40 000 ₽
        </span>
      </p>
      <span class="hr_asato"></span>
      <h3>Информация</h3>
      <span class="line__asato"></span>
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

      <div v-show="!activeMode" class="contact_author">
        <img src="images/img_author.png" alt="author" />
        <p class="contact_author_name">Александра Алексеева</p>
        <p class="contact_author_phone">+7 951 845 12 45</p>
      </div>

      <button v-show="!activeMode" class="btn__medium__premary">Связаться с автором</button>
    </div>
  </div>
</template>

<script>
export default {
    name: "authorBlock",
     computed: {
     activeMode(){
         return this.$store.getters.togglePresentation
     }
     }
}
</script>
