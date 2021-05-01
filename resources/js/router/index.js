import VueRouter from 'vue-router'
import Users from '../components/Users.vue'
import CreateUser from '../components/CreateUser.vue'

const routes = [
    {
        path: '/',
        name: 'users',
        component: Users,
    },
    {
        path: '/create',
        name: 'users.create',
        component: CreateUser,
    },
];

const router = new VueRouter({
    mode: 'history',
    routes: routes,
})

export default router;