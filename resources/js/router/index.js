import VueRouter from 'vue-router'
import Users from '../components/Users.vue'
const routes = [
    {
        path: '/',
        name: 'users',
        component: Users,
    },
];

const router = new VueRouter({
    mode: 'history',
    routes: routes,
})

export default router;