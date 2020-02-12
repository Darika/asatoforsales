
export default {
    state: {
        dataCardAds: [
            {
              title: "Заголовок карточки",
              price: "2 500 000",
              adress:
                "Ростовская область, Ростов-на-Дону, р-н Октябрьский, ул. Вавилова",
              bonus: "40 000",
              about_short:
                'Продается 1-комнатная квартира, в строящемся доме, срок сдачи: II-кв. 2019, общей площадью 40.50 кв.м., на 24 этаже. В состав жилого комплекса "Первый" входит два монолитно-кирпичных здания бизнес-класса высотой 25 этажей.',
              dataPub: "15.04.2019",
              numberId: "4431548",
              photos: [
                "http://media.4living.ru/4l-articles/0/603x328/21/102391.png",
                "https://www.ivd.ru/uploads/597094ac201b7.jpg",
                "https://turbo.network/hqroom/image/upload/c_limit,f_auto,h_10000,q_15,w_1600/v1566149788/post/00ec079738158df6da495c71/9a9a0dea262100db7XeCPCvjaDrskFkR.jpg"
              ],
              flor: "15/24",
              totalArea: "70,5",
              liveArea: "27,6,",
              kitchenArea: "12,6",
              content: {
                photosIn: { availability: true, quantity: 22 },
                video: { availability: true, quantity: 4 },
                tour: { availability: false },
                aero: { availability: true }
              }
            },
            {
              title: "Заголовок карточки 2",
              price: "1 500 000",
              adress:
                "Ростовская область, Ростов-на-Дону, р-н Октябрьский, ул. Мечникова",
              bonus: "40 000",
              about_short:
                'Продается 1-комнатная квартира, в строящемся доме, срок сдачи: II-кв. 2019, общей площадью 40.50 кв.м., на 24 этаже. В состав жилого комплекса "Первый" входит два монолитно-кирпичных здания бизнес-класса высотой 25 этажей.',
              dataPub: "15.04.2019",
              numberId: "4431548",
              photos: [
                "https://remont-f.ru/images/style/Sovremennyj_2.jpg",
                "https://mossebo.studio/wp-content/uploads/eefcf6d53f8e661491177bbdb98bc50e-Cropped.jpg",
                "https://avatars.mds.yandex.net/get-pdb/472427/d7241b70-5a94-4afd-85db-f04fb0d745a4/orig",
                "https://all4decor.ru/wp-content/uploads/2017/02/Dva-tsveta-v-interere.jpg"
              ],
              flor: "5/24",
              totalArea: "40,5",
              liveArea: "27,6,",
              kitchenArea: "12,6",
              content: {
                photosIn: { quantity: 12 },
                video: { availability: true, quantity: 2 },
                tour: { availability: true },
                aero: { availability: true }
              }
            }
          ]
    },
    getters: {
        getArticle(state){
            return state.dataCardAds
        }

    },
    mutations: {

    },
    actions: {

    },
  }
