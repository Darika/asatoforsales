import VueRouter from 'vue-router';
import homePage from './components/homePage.vue'
import adsPage from './components/ads_list/adsPage.vue'
import adPage from './components/ads_list/adsItem/adsPage/adPage'


export default new VueRouter({
    routes : [
        {
            path: '',
            component: homePage
        },
        {
            path: '/list-ads',
            component: adsPage,

        },
        {
            path: '/adspage-1',
            component: adPage
        }

    ],
    mode: 'history'
})
