import Vue from 'vue'
import Vuex from 'vuex'
import itemAds from './modules/itemAds'
import presentationMode from '@/store/modules/presentationMod'
import settingUser from '@/store/modules/settingUser'
Vue.use(Vuex);

export const store = new Vuex.Store({
   modules: {
    itemAds,
    presentationMode,
    settingUser
   },
})
