<template>
  <div>

      <agile class="main" ref="main" :options="options1" :as-nav-for="asNavFor1">
    <div class="slide" v-for="(slide, index) in slides" :key="index" :class="`slide--${index}`"><img :src="slide"/></div>
  </agile>
  <agile class="thumbnails" ref="thumbnails" :options="options2" :as-nav-for="asNavFor2">
    <div class="slide slide--thumbniail" v-for="(slide, index) in slides" :key="index" :class="`slide--${index}`" @click="$refs.thumbnails.goTo(index)"><img :src="slide"/></div>
    <template slot="prevButton"><i class="fas fa-chevron-left"></i></template>
    <template slot="nextButton"><i class="fas fa-chevron-right"></i></template>
  </agile>
  </div>
</template>

<script>
export default {
    data () {
		return {
			asNavFor1: [],
			asNavFor2: [],
			options1: {
				dots: false,
				fade: true,
				navButtons: false
			},

			options2: {
				autoplay: false,
				centerMode: true,
				dots: false,
				navButtons: false,
				slidesToShow: 3,
				responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 5
                    }
                },

                {
                    breakpoint: 1000,
                    settings: {
                        navButtons: true
                    }
                }
            ]

			},

			slides: [
					'https://www.ivd.ru/uploads/597094ac201b7.jpg',
					'http://media.4living.ru/4l-articles/0/603x328/21/102391.png',
					'https://turbo.network/hqroom/image/upload/c_limit,f_auto,h_10000,q_15,w_1600/v1566149788/post/00ec079738158df6da495c71/9a9a0dea262100db7XeCPCvjaDrskFkR.jpg',
					'https://remont-f.ru/images/style/Sovremennyj_2.jpg',
					'https://modernform.ru/wp-content/uploads/2019/01/int_05aa-1170x605.jpg',
					'https://mossebo.studio/wp-content/uploads/eefcf6d53f8e661491177bbdb98bc50e-Cropped.jpg',
					'https://avatars.mds.yandex.net/get-pdb/472427/d7241b70-5a94-4afd-85db-f04fb0d745a4/orig'
				]
		}
	},
	mounted () {
		this.asNavFor1.push(this.$refs.thumbnails)
		this.asNavFor2.push(this.$refs.main)
	}
}
</script>
