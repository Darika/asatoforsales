<template>
  <div class="col-xl-5 col-md-6 p-md-0 pl-lg-2">
    <div class="right_panel">
      <h3>Профиль</h3>
      <span class="line__asato"></span>
      <div class="user_avatar_container">
        <p>Фотография профиля отстутсвует</p>
        <img src="images/user_photo_default.svg" alt="user_avatar" />
        <label class="upload_photo" for="upload_photo">
          Загрузить фотографию
          <input id="upload_photo" type="file" />
        </label>
      </div>

      <div class="input_group_setting">
        <label>
          ФИО
          <input value="Александр Савченко" type="text" />
        </label>
        <label>
          Статус
          <input value="Продавец" disabled type="text" />
        </label>
        <label>
          Номер телефона
          <input value="+ 7 (928) 451 45 78" placeholder type="tel" />
        </label>
        <label>
          Электронная почта
          <input value="asato@yandex.ru" type="email" />
        </label>
        <label>
          Город
          <input value="Ростов-на-Дону" disabled type="text" />
        </label>
        <button class="btn__medium__premary">Сохранить</button>
      </div>
    </div>
  </div>
</template>