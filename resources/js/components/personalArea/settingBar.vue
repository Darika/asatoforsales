<template>
  <div class="col-xl-5 col-md-6 p-md-0 pl-lg-2">
    <div class="right_panel">
      <h3>Профиль</h3>
      <span class="line__asato"></span>
      <div class="user_avatar_container">
        <div v-show="!photoUser" class="user_avatar_box">
          <p>Фотография профиля отстутсвует</p>

        </div>

         <img  v-show="photoUser" src="images/user_photo_default.svg" alt="user_avatar" />
        <label class="upload_photo" for="upload_photo">
          Загрузить фотографию
          <input id="upload_photo" type="file" />
        </label>
      </div>

      <div class="input_group_setting">
        <label>
          ФИО
          <input v-model="getData.name" placeholder="Введите свое ФИО" type="text" />
        </label>
        <label>
          Статус
          <input v-model="getData.role" disabled type="text" />
        </label>
        <label>
          Номер телефона
          <input v-model="getData.tel" placeholder="Введите номер телефона" type="tel" />
        </label>
        <label>
          Электронная почта
          <input v-model="getData.email" type="email" placeholder="Введите почту" />
        </label>
        <label>
          Город
          <input v-model="getData.city" disabled type="text" />
        </label>
        <button class="btn__medium__premary">Сохранить</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      photoUser: false
    };
  },
  computed: {
    getData() {
      return this.$store.getters.getData;
    }
  }
};
</script>
