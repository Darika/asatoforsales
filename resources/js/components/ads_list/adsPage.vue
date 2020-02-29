<template>
  <!-- Глобальный родительский компонент страницы Объявления -->
  <div class="container-fluid p-0">
    <section class="ads_asato">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="bred_cumb">
              <router-link to="/">Главная</router-link>
              <span class="arrow_bred"></span>
              <router-link to="/list-ads">Объявления</router-link>
            </div>
            <h1 class="h1_defalutPage">Объявления</h1>
          </div>
        </div>
        <categoryTabs />
        <filters />
        <div class="row mt-4">
          <div class="col-lg-4">
            <h2>Найдено {{dataCardAds.length}} объектов</h2>
            <span class="line__asato"></span>
          </div>
          <div class="col-lg-8">
            <div class="presetation_sort">
              <presentationMode />
              <dropSelectDark :listSort="filtersSort" />
            </div>
          </div>
        </div>
        <adsItem
          v-for="(items, index) in dataCardAds"
          :key="index"
          :id="index"
          :arrayAds="dataCardAds"
          v-loading="loading"
        />
    <paginationAsato/>
      </div>



    </section>
  </div>
</template>

<script>
import categoryTabs from "./categoryTabs";
import filters from "./filters";
import dropSelectDark from "../global/dropSelectDark";
import presentationMode from "../global/presetationMode";
import adsItem from "../ads_list/adsItem/adsItem";
import paginationAsato from "@/components/global/paginationAsato"


export default {
  components: {
    categoryTabs,
    filters,
    dropSelectDark,
    presentationMode,
    adsItem,
    paginationAsato

  },
  data() {
    return {
        loading: true,
      filtersSort: [
        { items: "По рейтингу", active: false },
        { items: "По цене", active: false },
        { items: "Значение 1", active: false },
        { items: "Значение 2", active: false },
        { items: "По убыванию", active: false }
      ],
    };
  },
  computed: {
      dataCardAds(){
         return this.$store.getters.getArticle
      }
  },
  mounted(){
      setTimeout(() => {
           return this.loading = !this.loading
      }, 3000);
  }
};
</script>
