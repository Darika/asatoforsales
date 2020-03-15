import VueRouter from 'vue-router';
import homePage from './components/homePage.vue'
import adsPage from './components/ads_list/adsPage.vue'
import adPage from './components/ads_list/adsItem/adsPage/adPage'
import personalArea from './components/personalArea/defaultArea.vue'


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
        },
        {
            path: '/personal-area',
            component: personalArea,
            props: {currentRoute: 'settingBar'}
        },
        {
            path: '/personal-area-favorites',
            component: personalArea,
            props: {currentRoute: 'favoritesBar'}
        }

    ],
    mode: 'history'
})
