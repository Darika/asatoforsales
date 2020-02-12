<template>
                <div>
          <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="cto__asato">
                            <h1> ASATO — это инструмент <br> работы с объектами недвижимости.
                            </h1>
                            <span class="line__asato"></span>
                            <p> Подготовим и разместим презентацию на нашей интернет-платформе, где мы "расскажем
                                историю" и создадим эмоциональную связь потенциального клиента с Вашим объектом
                                недвижимости.</p>
                            <button class="btn__medium__premary">Заказать обратный звонок</button>

                        </div>

                    </div>

                </div>

            </div>

            <button @click="visiblePresent()" class="btn__presentation">Посмотреть нашу презентацию <i class="play"></i></button>


            </div>
</template>

<script>
export default {
    props: {
        visibleModalVideo: Boolean
    },
     data(){
         return{
             visibleVideo: false
         }
     },
     methods: {
         visiblePresent(){
             this.visibleVideo = !this.visibleVideo
             this.$emit('invisVideo', this.visibleModalVideo)
         }
     }
}
</script>
