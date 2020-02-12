<template>
  <div>
    <div class="sign_in_popUp">
      <h1>Вход в Asato</h1>
        <i @click="closePopUp()" class="close_popUp"></i>
      <div v-if="signIn">
        <label for="email">
          Ваша почта
          <input
            class="input_asato"
            placeholder="Введите ваш email"
            id="email"
            type="email"
          />
          <span v-show="errorEmail" class="error_input">{{errorEmailText}}</span>
        </label>
        <label class="passLabel" for="pass">
          Ваш пароль
          <input
            v-if="showPass"
            v-model="password"
            class="input_asato"
            placeholder="Введите ваш пароль"
            type="password"
          />
          <input
            v-if="!showPass"
            v-model="password"
            class="input_asato"
            placeholder="Введите ваш пароль"
            type="text"
          />
          <span v-show="errorPass" class="error_input">{{ errorPassTetxt }}</span>
          <button @click="showPassword()" v-if="showPass" class="showPass"></button>
          <button @click="showPassword()" v-if="!showPass" class="showPass-off"></button>
        </label>

        <button class="btn__medium__premary">Войти</button>
        <a @click.prevent="recoveryPass" href="#">Забыли пароль?</a>
      </div>
      <!-- Восстановление пароля -->
      <div v-if="!signIn" class="recovery">
        <label v-if="passRecovery" for="pass">
          Ваша почта
          <input class="input_asato" placeholder="Введите вашу почту" type="email" />
          <span v-show="errorEmail" class="error_input">{{errorEmailText}}</span>
        </label>
        <button class="btn__medium__premary">Восстановить пароль</button>
        <a @click.prevent="recoveryPass" href="#">Назад</a>
      </div>
    </div>
    <div class="overlay_bg"></div>
  </div>
</template>>

<script>
export default {
    props: {
        close: Boolean
    },
  data() {
    return {
      errorEmail: false,
      errorEmailText: 'Эта почта привязана к другому аккаунту',
      errorPass: false,
      errorPassTetxt:'Неверный пароль',
      passRecovery: false,
      password: '',
      signIn: true,
      showPass: true,
      closeModal: false
    };
  },
  methods: {
    recoveryPass() {
      this.signIn = !this.signIn;
      this.passRecovery = !this.passRecovery;
    },
    showPassword() {
      this.showPass = !this.showPass;
    },
     closePopUp () {
      this.closeModal = !this.closeModal
      this.$emit('emitClose', this.close)
    }
  }
};
</script>
