<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## ASATO

This is Asato

# Система VUE компонентов.
Все компоненты в проекте делятся на глобальные и локальные.

## Глобальные компоненты

### App.vue

Главный компонент, сюда рендрятся все роуты и остальные глобальные компоненты.

Render:

1. Router-view — главная страница
2. navBar — Компонент навигации
3. signIn — Модальное окно отвечающее за вход, можно включить через свойство `signInModal`
4. footerAsato — Компонент футера

### navBar.vue

Компонент отвечает за навигацию по Asato

Data:

1. showBar — свойство показывает/скрывает меню в моб.версии.
2. signInModal — свойство показывает/скрывае окно входа.
3. loginOn — отвечает за вход юзера.
4. dropdownMenu — свойство показывает/скрывает меню юзера. 
5. userParams — объект содержащий Имя и роль пользователя. 

Methods:

1. `showNav()` — Показывает моб.меню
2. `openModalSignIn()` — Активация модального окна
3. `closeMenuUser()` — Закрывает моб.меню

### signIn.vue

Компонент отвечает за модальное окно входа

Data: 

1. errorEmail — свойство отвечает за наличие ошибки в Email.
2. errorEmailText — текст ошибки почты.
3. errorPass — свойство отвечает за наличие ошибки в пароле.
4. errorPassText — текст ошибки пароля. 
5. passRecovery — свойство отвечает за форму восстановления. 
4. password — Модель пароля. 
5. signIn — форма входа. 
6. showPass — кнопка показать пароль
7. closeModal — закрыть модальное окно

Methods: 

1. `recoveryPass()` — Показывает форму восстановления пароля
2. `showPassword() ` — Показывает/скрывает пароль
3. `closePopUp() ` — Закрывает модальное окно


### footerAsato.vue 

Компонент футера.

### homePage.vue

Глобальный компонент главной страницы

Render:

1. headerHome — первый блок главной страницы
2. promoBox — второй блок 
3. sliderAsato — третий блок  (карусель)
4. clientHome — четвертый блок 
5. presentation — компонент видеопрезентации

data: 

1. presentationVisible — показывает/скрывает презентацию

> Дочерние компоненты опишу позже


### dropSelect.vue

Компонент отвечает за выпадющий список.

![dropSelectDark](https://i.imgur.com/ESAlnwS.png)

Props:

* listSelect — принимает массив опций/значений

Data: 

1. drop — открывает список
2. selected — значение по умолчанию 

Methods:

1. `openContext()` — открывает список
2. `closeContext()`  — закрывает список
3. `clickActiveSelect(activeClass, nameBtn)` — ставит выбранное значение в селект


По умолчанию в выпадающем списке стоит значение "Выберите значение", его можно изменить если прописать в вызове компонента тэг `<template v-slot:valueDefault>` и внутри тэга прописать нужное значание по умолчанию.

Пример:

```
  <dropSelect :listSelect="filtersCity">
    Сортировка
    <template v-slot:valueDefault>Мое значение сортировки по умолчанию</template>
  </dropSelect>
```

### dropSelectDark.vue

Другой выпадющий список 

![dropSelectDark](https://i.imgur.com/TmrFgim.png)

Имеет те же свойства и методы что и dropSelect.


### presentationMode.vue

Компонент свитчера, который включает режим презентации в Asato

![switch](https://i.imgur.com/vZM3Hu8.png)


### adsPage.vue

Глобальный родительский компонент страницы Объявления 

Render:

1. categoryTabs — компонент быстрых категорий
2. filters — фильтры
3. dropSelectDark — выпадющий список
4. presentationMode — включить/откляючить режим презентаций
5. adsItem — карточка объявления


Data: 

1. filtersSort — статический массив объектов для отрисовки списков для dropSelect и categoryTabs, необходимо заменить.

Computed: 

* `dataCardAds()` — Забираем данные из стора
Store находится тут resources > js > modules > itemAds.js


### adsItem.vue

Компонент карточки объявления в списке объявлений.

![pic](https://i.imgur.com/6ZsYCs4.png)

Render:

* carouselItem — компонент карусели карточки

Props:

1. arrayAds — Принимает массив объектов с данным карточки с компонента adsPage.vue
2. id — принимает порядковый номер элмента массива arrayAds


### carouselPhoto.vue

Компонент карусели в компоненте adsItem.vue 

Props:

1. photoUrl — Принимает массив объектов с url фото из компонента adsPage.vue.
2. contentIn — принимает массив объектов `content` из компонента adsPage.vue, на выходе получаем `number` и `boolean` значения о наличии и количества фото/видео/3д/аэросъемки в карточке  


### categoryTabs.vue

Компонент быстрых фильтров 

![pic_tabs](https://i.imgur.com/8EyT0HW.png) 

Data:

1. btnDrop — Значение конпки в моб версии.
2. fastList — массив объектов со значениями быстрых фильтров
3. styleDrop — свойство отвечающие за компонент в мобильной версии

Methods: 

1. `droppedFast()` — смена стилей для активного таба
2. `clickActiveCategory(activeClass, nameBtn)` — cтавит выбранное значение в селект


### filters.vue

Компонент расширенных фильтров


![фильтры](https://i.imgur.com/Ndz9piZ.png) 

Data:

1. visible — отвечает за раскрытие фильтров
2. filtersCity — массив опций для селекта

Methods:

* `toggleFilters()` — Открывает/закрывает фильтры


### adPage.vue

Глобальный компонент открытой карточки

Render: 

1. presentationMode — Режим презентации
2. carouselAsato — карусель фотографий 
3. aboutAd — блок информации объекта  
4. fastTabsCard — табы с информацией 
5. announcementMaps — карта 
6. authorBlock — блок с автором  
7. anotherAnnouncement — другие объекты

Computed: 

* `activeMode()` — забираем стейт из стора для режима презентации


### carouselAsato.vue

Компонент карусели в открытой карточке 

Data: 

1. asNavFor1 — массив для карусели 
2. asNavFor2 — массив для карусели 2
3. options1 — конфиг карусели  
4. options2 — конфиг карусели  
5. slides — массив фотографий
 

Mounted:
Пушим фото в asNavFor1 и asNavFor2


### aboutAd.vue

Компонент информации о объекте в открытой карточке 


### fastTabsCard.vue

Компонент быстрых табов информации

Data: 

1. btnDrop — Опция в мобильной версии по умолчанию 
2. fastList — массив для табов
3. styleDrop — стили для переключения 

Methods:

* `droppedFast()` — смена стилей для активного таба
* `clickActiveCategory(activeClass, nameBtn)` — cтавит выбранное значение в селект


### announcementMaps.vue

Компонент карты в открытой карточке объявления


### anotherAnnouncement.vue

Компонент похожих/других объектов 


### anotherAnnouncement.vue

Компонент блока с автором
