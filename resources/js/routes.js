import Vue from 'vue';
import Router from 'vue-router';

import DashBoard from "./views/DashBoard"
import IndexBeneficiarios from "./views/Beneficiarios/Index"

import IndexTypePopulation from "./views/TypePopulation/Index";
import CreateTypePopulation from "./views/TypePopulation/Create";
import DetailTypePopulation from "./views/TypePopulation/Detail";
import EditTypePopulation from "./views/TypePopulation/Edit";
import VueRouter from 'vue-router';

Vue.use(Router);

export default new VueRouter({
    base:"/app/",
    mode: 'history',
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
            path: '/type-population/list',
            name: 'TypePopulation',
            component: IndexTypePopulation
        },
        {
            path: '/type-population/create',
            name: 'CreateTypePopulation',
            component: CreateTypePopulation
        },
        {
            path: '/type-population/:id',
            name: 'DetailTypePopulation',
            component: DetailTypePopulation
        },
        {
            path: '/type-population/:id/edit',
            name: 'EditTypePopulation',
            component: EditTypePopulation
        },

        {
            path: '*',
            component: require('./views/404')
        }
    ],
})