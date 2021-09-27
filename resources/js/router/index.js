import Vue from 'vue'
import Router from 'vue-router'
import TheContainer from "../containers/TheContainer";
import Component1 from "../components/Component1";
import Component2 from "../components/Component2";

Vue.use(Router)

export default new Router({
    mode: 'history', // https://router.vuejs.org/api/#mode
    linkActiveClass: 'active',
    scrollBehavior: () => ({y: 0}),
    routes: configRoutes()
})

function configRoutes() {
    return [
        {
            path: '/',
            name: 'Home',
            component: TheContainer,
            children: [
                {
                    path: '',
                    name: 'Dashboard',
                    component: Component1
                },
                {
                    path: '2',
                    name: 'Question2',
                    component: Component2

                },
            ]
        }
    ]
}
