import VueRouter from 'vue-router'

// Pages
// import Home from './components/IndexComponent'
import Register from './pages/Index6'
import Home from './components/IndexComponent'
import Logged_page01 from './pages/Index4'
import Forget_pwd from './pages/Index5.vue'
import Ussing from './pages/Index2.vue'
import Question_answer from './pages/Index3.vue'
import Luggage_search from './pages/Index15.vue'
import Luggage_add from './pages/Index14.vue'
import Luggage_edit_delete from './pages/Index13.vue'
import EmptyTruck_search from './pages/Index11.vue'
import EmptyTruck_add from './pages/Index10.vue'
import EmptyTruck_edit_delete from './pages/Index9.vue'
import LuggageInfo from './pages/Index16.vue'
import EmptyTruckInfo from './pages/Index12.vue'
import Membership from './pages/Index7.vue'
import CorpInfo from './pages/Index17.vue'
import Question from './pages/Index1.vue'
// Routes
const routes = [{
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/register',
        name: 'index6',
        component: Register,
    },
    {
        path: '/logged_page01',
        name: 'index4',
        component: Logged_page01,
    },
    {
        path: '/forget_pwd',
        name: 'index5',
        component: Forget_pwd,
    },
    {
        path: '/ussing',
        name: 'index2',
        component: Ussing,
    },
    {
        path: '/question_answer',
        name: 'index3',
        component: Question_answer,
    },
    {
        path: '/luggage_search',
        name: 'index15',
        component: Luggage_search,
    },
    {
        path: '/luggage_add',
        name: 'index14',
        component: Luggage_add,
    },
    {
        path: '/luggage_edit_delete',
        name: 'index13',
        component: Luggage_edit_delete,
    },
    {
        path: '/emptytruck_search',
        name: 'index11',
        component: EmptyTruck_search,
    },
    {
        path: '/emptytruck_add',
        name: 'index10',
        component: EmptyTruck_add,
    },
    {
        path: '/empty_edit_delete',
        name: 'index9',
        component: EmptyTruck_edit_delete,
    },
    {
        path: '/luggageInfo',
        name: 'index16',
        component: LuggageInfo
    },
    {
        path: '/emptyTruckInfo',
        name: 'index12',
        component: EmptyTruckInfo
    },
    {
        path: '/membership',
        name: 'index7',
        component: Membership
    },
    {
        path: '/corpInfo',
        name: 'index17',
        component: CorpInfo
    },
    {
        path: '/question',
        name: 'index1',
        component: Question
    }



]

const router = new VueRouter({
    history: true,
    mode: 'history',
    routes,
})

export default router