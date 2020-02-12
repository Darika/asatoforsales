export default {
    state: {
        presentationMode: false
    },
    getters: {
        togglePresentation(state){
            return state.presentationMode
        }
    },
    mutations: {
        activeted(state){
            state.presentationMode = !state.presentationMode
        }
    },
    actions: {}
}
