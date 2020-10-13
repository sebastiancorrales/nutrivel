import Vue from 'vue';
import Router from 'vue-router';

// Componentes
import DashBoard from "./views/DashBoard"

import IndexBeneficiaries from "./views/Beneficiaries/Index"

import CreateBeneficiary from "./views/Beneficiaries/Create"
import CreatePopulationData from "./views/Beneficiaries/Create/PopulationData";
import CreateFamilyStructure from "./views/Beneficiaries/Create/FamilyStructure";
import CreateSocialProgram from "./views/Beneficiaries/Create/SocialPrograms";
import CreateEducation from "./views/Beneficiaries/Create/Education";
import CreateSocialSecurity from "./views/Beneficiaries/Create/SocialSecurity";
import CreateMainEconomicSupplier from "./views/Beneficiaries/Create/MainEconomicSupplier";
import CreateFoodSecurity from "./views/Beneficiaries/Create/FoodSecurity";
import CreateLocationConditionHousing from "./views/Beneficiaries/Create/LocationConditionHousing";


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

import IndexAgeGroup from "./views/AgeGroups/Index";
import EditAgeGroup from "./views/AgeGroups/Edit";
import CreateAgeGroup from "./views/AgeGroups/Create";

import IndexCovenant from "./views/Covenants/Index";
import EditCovenant from "./views/Covenants/Edit";
import CreateCovenant from "./views/Covenants/Create";

import IndexEthnicity from "./views/Ethnicities/Index";
import EditEthnicity from "./views/Ethnicities/Edit";
import CreateEthnicity from "./views/Ethnicities/Create";

import IndexServiceUnit from "./views/ServiceUnits/Index";
import EditServiceUnit from "./views/ServiceUnits/Edit";
import CreateServiceUnit from "./views/ServiceUnits/Create";

import IndexPrograms from "./views/Programs/Index";
import EditPrograms from "./views/Programs/Edit";
import CreatePrograms from "./views/Programs/Create";

import IndexSocialSecurityScheme from "./views/SocialSecuritySchemes/Index";
import EditSocialSecurityScheme from "./views/SocialSecuritySchemes/Edit";
import CreateSocialSecurityScheme from "./views/SocialSecuritySchemes/Create";

import IndexFuncionalDivercity from "./views/FuncionalDiversities/Index";
import EditFuncionalDivercity from "./views/FuncionalDiversities/Edit";
import CreateFuncionalDivercity from "./views/FuncionalDiversities/Create";

import IndexVaccination from "./views/Vaccinations/Index";
import EditVaccination from "./views/Vaccinations/Edit";
import CreateVaccination from "./views/Vaccinations/Create";

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
        // Create
        {
            path: '/beneficiaries/create',
            name: 'CreateBeneficiary',
            component: CreateBeneficiary
        },
        {
            path: '/beneficiaries/create/population-data/:id',
            name: 'CreatePopulationData',
            component: CreatePopulationData
        },
        {
            path: '/beneficiaries/create/family-structure/:id',
            name: 'CreateFamilyStructure',
            component: CreateFamilyStructure
        },
        {
            path: '/beneficiaries/create/social-programs/:id',
            name: 'CreateSocialProgram',
            component: CreateSocialProgram
        },
        {
            path: '/beneficiaries/create/education/:id',
            name: 'CreateEducation',
            component: CreateEducation
        },
        {
            path: '/beneficiaries/create/social-security/:id',
            name: 'CreateSocialSecurity',
            component: CreateSocialSecurity
        },
        {
            path: '/beneficiaries/create/main-economic-supplier/:id',
            name: 'CreateMainEconomicSupplier',
            component: CreateMainEconomicSupplier
        },
        {
            path: '/beneficiaries/create/food-security/:id',
            name: 'CreateFoodSecurity',
            component: CreateFoodSecurity
        },
        {
            path: '/beneficiaries/create/location-condition-housing/:id',
            name: 'CreateLocationConditionHousing',
            component: CreateLocationConditionHousing
        },
        // detail
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
        //* Age Groups *//
        {
            path: '/age-group/list',
            name: 'IndexAgeGroup',
            component: IndexAgeGroup
        },
        {
            path: '/age-group/create',
            name: 'CreateAgeGroup',
            component: CreateAgeGroup
        },
        {
            path: '/age-group/:id/edit',
            name: 'EditAgeGroup',
            component: EditAgeGroup
        },
        //* Covenants *//
        {
            path: '/covenants/list',
            name: 'IndexCovenant',
            component: IndexCovenant
        },
        {
            path: '/covenants/create',
            name: 'CreateCovenant',
            component: CreateCovenant
        },
        {
            path: '/covenants/:id/edit',
            name: 'EditCovenant',
            component: EditCovenant
        },
        //* Ethnicity *//
        {
            path: '/ethnicity/list',
            name: 'IndexEthnicity',
            component: IndexEthnicity
        },
        {
            path: '/ethnicity/create',
            name: 'CreateEthnicity',
            component: CreateEthnicity
        },
        {
            path: '/ethnicity/:id/edit',
            name: 'EditEthnicity',
            component: EditEthnicity
        },
        //* Service Units *//
        {
            path: '/service-units/list',
            name: 'IndexServiceUnit',
            component: IndexServiceUnit
        },
        {
            path: '/service-units/create',
            name: 'CreateServiceUnit',
            component: CreateServiceUnit
        },
        {
            path: '/service-units/:id/edit',
            name: 'EditServiceUnit',
            component: EditServiceUnit
        },
        //* Programs *//
        {
            path: '/programs/list',
            name: 'IndexPrograms',
            component: IndexPrograms
        },
        {
            path: '/programs/create',
            name: 'CreatePrograms',
            component: CreatePrograms
        },
        {
            path: '/programs/:id/edit',
            name: 'EditPrograms',
            component: EditPrograms
        },
        //* Social Security Schemes *//
        {
            path: '/social-security-schemes/list',
            name: 'IndexSocialSecurityScheme',
            component: IndexSocialSecurityScheme
        },
        {
            path: '/social-security-schemes/create',
            name: 'CreateSocialSecurityScheme',
            component: CreateSocialSecurityScheme
        },
        {
            path: '/social-security-schemes/:id/edit',
            name: 'EditSocialSecurityScheme',
            component: EditSocialSecurityScheme
        },
        //* Social Functional Diversities *//
        {
            path: '/functional-diversities/list',
            name: 'IndexFuncionalDivercity',
            component: IndexFuncionalDivercity
        },
        {
            path: '/functional-diversities/create',
            name: 'CreateFuncionalDivercity',
            component: CreateFuncionalDivercity
        },
        {
            path: '/functional-diversities/:id/edit',
            name: 'EditFuncionalDivercity',
            component: EditFuncionalDivercity
        },
        //* Vaccinations *//
        {
            path: '/vaccinations/list',
            name: 'IndexVaccination',
            component: IndexVaccination
        },
        {
            path: '/vaccinations/create',
            name: 'CreateVaccination',
            component: CreateVaccination
        },
        {
            path: '/vaccinations/:id/edit',
            name: 'EditVaccination',
            component: EditVaccination
        },


    // Others
        {
            path: '*',
            component: require('./views/404')
        },
        {
            path: '*',
            component: require('./views/404')
        }
    ],
})