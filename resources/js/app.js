require('./bootstrap');

import Vue from 'vue'
import App from './App.vue'
import router from './router'
import CoreuiVue from '@coreui/vue'

import ImageFallBack from "./directive";

Vue.config.performance = true
Vue.use(CoreuiVue)

Vue.directive("image-fall-back", ImageFallBack);

const app = new Vue({
    el: '#app',
    router,
    // store,
    // icons,
    template: '<App/>',
    components: {
        App
    }
});
