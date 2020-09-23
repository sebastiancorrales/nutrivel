import Vue from 'vue';
import Router from 'vue-router';

// Componentes
import DashBoard from "./views/DashBoard"

import IndexBeneficiaries from "./views/Beneficiaries/Index"
import CreateBeneficiary from "./views/Beneficiaries/Create"
import EditBeneficiary from "./views/Beneficiaries/Edit"
import DetailBeneficiary from "./views/Beneficiaries/Detail"
import InstitutionalInformationDetail from "./views/Beneficiaries/Detail/InstitutionalInformationDetail"
import FamilyStructureDetail from "./views/Beneficiaries/Detail/FamilyStructureDetail"
import SocialProgramsDetail from "./views/Beneficiaries/Detail/SocialProgramsDetail"
import EducationDetail from "./views/Beneficiaries/Detail/EducationDetail"
import SocialSecurityDetail from "./views/Beneficiaries/Detail/SocialSecurityDetail"
import MainEconomicSupplier from "./views/Beneficiaries/Detail/MainEconomicSupplier"
import FoodSecurityDetail from "./views/Beneficiaries/Detail/FoodSecurityDetail"
import LocationConditionHousing from "./views/Beneficiaries/Detail/LocationConditionHousing"

import IndexTypePopulation from "./views/TypePopulation/Index";
import CreateTypePopulation from "./views/TypePopulation/Create";
import DetailTypePopulation from "./views/TypePopulation/Detail";
import EditTypePopulation from "./views/TypePopulation/Edit";
import VueRouter from 'vue-router';

Vue.use(Router);

export default new VueRouter({
    base: "/app/",
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: DashBoard
        },

        //* Beneficiaries Routes *//
        
        {
            path: '/beneficiaries/list',
            name: 'beneficiaries',
            component: IndexBeneficiaries
        },
        {
            path: '/beneficiaries/create',
            name: 'CreateBeneficiary',
            component: CreateBeneficiary
        },
        {
            path: '/beneficiaries/detail/:id',
            name: 'DetailBeneficiary',
            component: DetailBeneficiary
        },
        {
            path: '/beneficiaries/detail/institutional-information-detail/:id',
            name: 'InstitutionalInformationDetail',
            component: InstitutionalInformationDetail
        },
        {
            path: '/beneficiaries/detail/family-structure-detail/:id',
            name: 'FamilyStructureDetail',
            component: FamilyStructureDetail
        },
        {
            path: '/beneficiaries/detail/social-programs-detail/:id',
            name: 'SocialProgramsDetail',
            component: SocialProgramsDetail
        },
        {
            path: '/beneficiaries/detail/education-detail/:id',
            name: 'EducationDetail',
            component: EducationDetail
        },
        {
            path: '/beneficiaries/detail/social-security-detail/:id',
            name: 'SocialSecurityDetail',
            component: SocialSecurityDetail
        },
        {
            path: '/beneficiaries/detail/main-economic-supplier-detail/:id',
            name: 'MainEconomicSupplier',
            component: MainEconomicSupplier
        },
        {
            path: '/beneficiaries/detail/food-security-detail/:id',
            name: 'FoodSecurityDetail',
            component: FoodSecurityDetail
        },
        {
            path: '/beneficiaries/detail/location-condition-housing-detail/:id',
            name: 'LocationConditionHousing',
            component: LocationConditionHousing
        },

        //* TypePopulation Routes *//

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