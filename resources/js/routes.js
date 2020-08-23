import Vue from 'vue';
import Router from 'vue-router';

import DashBoard from "./views/DashBoard"
import IndexBeneficiarios from "./views/Beneficiarios/Index"

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            name: 'home',
            component: DashBoard
        },
        {
            path: '/beneficiarios/list',
            name: 'beneficiarios',
            component: IndexBeneficiarios
        },
        {
            path: '*',
            component: require('./views/404')
        }
    ],
    mode: 'history',
})