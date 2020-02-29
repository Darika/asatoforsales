
// let router = require('./router');
require('./bootstrap');
window.Vue = require('vue');
import { store } from './store'
import router from './router'
import VueRouter from 'vue-router';
import vClickOutside from 'v-click-outside'
import VueAgile from 'vue-agile'
import ElementUI from 'element-ui';
import '../theme/index.css'


Vue.use(VueAgile)
Vue.use(vClickOutside)
Vue.use(ElementUI);

Vue.component('app-vue', require('./components/App.vue').default);



Vue.use(VueRouter);

export const eventEmmiter = new Vue();

const app = new Vue({
    el: '#app',
    router,
    store
});
