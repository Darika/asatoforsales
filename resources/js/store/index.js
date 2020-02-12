import Vue from 'vue'
import Vuex from 'vuex'
import itemAds from './modules/itemAds'
import presentationMode from '@/store/modules/presentationMod'
Vue.use(Vuex);

export const store = new Vuex.Store({
   modules: {
    itemAds,
    presentationMode
   },
})
