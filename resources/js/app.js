require('./bootstrap');

import Vue from 'vue'
import App from './App.vue'
import router from './router'
import CoreuiVue from '@coreui/vue'

Vue.config.performance = true
Vue.use(CoreuiVue)

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
