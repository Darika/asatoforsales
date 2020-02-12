<template>
  <div>
    <div class="presentation_iframe">
        <h1>Наша презентация</h1>
         <i @click="closePresentation()" class="close_popUp"></i>
      <iframe
      width="100%"
        src="https://www.youtube.com/embed/3CS93CdMv_E"
        frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </div>
    <div class="overlay_bg"></div>
  </div>
</template>

<script>
export default {
    props: {
        closeVideo: Boolean
    },
    data(){
        return{
            closeModalVideo: false
        }
    },
    methods: {
        closePresentation(){
             this.closeModalVideo = !this.closeModalVideo
             this.$emit('emitCloseVideo', this.closeVideo)
        }
    }
}
</script>
