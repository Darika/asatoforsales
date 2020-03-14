export default {
    state: {
       dataUser: {
           name: 'Александр Савченко',
           role: 'Продавец',
           tel: '+ 7 (921) 451 78 12',
           email: 'asato@yandex.ru',
           city: 'Росто-на-Дону'
       }
    },
    getters: {
        getData(state){
            return state.dataUser
        }
    },
    mutations: {

    },
    actions: {}
}
