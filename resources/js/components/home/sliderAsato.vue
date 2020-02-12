<template>
  <section class="section_slider p-0">
    <div class="row">
      <div class="col-lg-7">
        <div class="count_slider">
          <p>
            0<span>{{index + 1}}</span>
          </p>
        </div>
            <div class="control_btn">
          <button @click.prevent="prev()" class="prev"></button>
          <button @click.prevent="next()" class="next"></button>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="box_slider_img">


          <img
            class="swiper-slide"
            src="https://images.unsplash.com/photo-1479839672679-a46483c0e7c8?ixlib=rb-1.2.1&auto=format&fit=crop&w=654&q=80"
            alt="img"
          />
          <img
            class="swiper-slide"
            src="https://images.unsplash.com/photo-1494891848038-7bd202a2afeb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=645&q=80"
            alt="img"
          />
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="swiper-container_three">
            <div class="box_text_slider swiper-wrapper">
              <!-- <carousel  :autoplay="false" :data="data" :indicators="false"></carousel> -->

                  <transition name="slide-fade">
                <slideCarouselMain>
                  <div class="box_text_slider_one swiper-slide">
                    <h1>
                      Встречайте — совершенно новый
                      сервис ASATO
                    </h1>
                    <span class="line__asato"></span>
                    <p>
                      "Упакуем" и представим всем агентствам недвижимости Вашу квартиру, дом, земельный
                      участок
                      или коммерческую недвижимость
                    </p>
                    <a class="about_project" href="#">
                      Подробней о проекте
                      <span class="arrow_asato"></span>
                    </a>
                  </div>
                </slideCarouselMain>
             </transition>
               <transition name="slide-fade">
                <slideCarouselMain>
                  <div class="box_text_slider_one swiper-slide">
                    <h1>Вам понравится</h1>
                    <span class="line__asato"></span>
                    <p>
                      "Упакуем" и представим всем агентствам недвижимости Вашу квартиру, дом, земельный
                      участок
                      или коммерческую недвижимость
                    </p>
                    <a class="about_project" href="#">
                      Подробней о проекте
                      <span class="arrow_asato"></span>
                    </a>
                  </div>
                </slideCarouselMain>
     </transition>
                <slideCarouselMain>
                  <div class="box_text_slider_one swiper-slide">
                    <h1>Lorem ipsum</h1>
                    <span class="line__asato"></span>
                    <p>
                      "Упакуем" и представим всем агентствам недвижимости Вашу квартиру, дом, земельный
                      участок
                      или коммерческую недвижимость
                    </p>
                    <a class="about_project" href="#">
                      Подробней о проекте
                      <span class="arrow_asato"></span>
                    </a>
                  </div>
                </slideCarouselMain>

            </div>
          </div>
          <!-- Коробка текста для слайдера -->

          <!-- Коробка текста для слайдера -->
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import slideImage from "./carousel/slideImage";
import slideCarouselMain from "./carousel/slideCarouselMain";
export default {
  components: {
    slideImage,
    slideCarouselMain
  },
  data() {
    return {
      index: 0,
      slides: []
    };
  },
  mounted() {
    this.slides = this.$children;
    this.slides.forEach((slide, i) => {
      slide.index = i;
    });

  },
  computed: {
    slideCount() {
      return this.slides.length;
    }
  },
  methods: {
    next() {
      this.index++;
      if(this.index >= this.slideCount){
          this.index = 0
      }
    },
    prev() {
      this.index--
      if(this.index < 0){
          this.index = this.slideCount - 1
      }
    }
  }
};
</script>

<style>

    .slide-fade-enter-active {
  transition: all .3s ease;
}
.slide-fade-leave-active {
  transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter, .slide-fade-leave-to
/* .slide-fade-leave-active до версии 2.1.8 */ {
  transform: translateX(10px);
  opacity: 0;
}
</style>
