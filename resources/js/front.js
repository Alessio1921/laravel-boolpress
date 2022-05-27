window.Vue = require('vue');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.Vue.use(VueRouter);

import App from "./views/App.vue";
import VueRouter from "vue-router";
import Home from "./pages/Home.vue";
import Contacts from "./pages/Contacts";
import Posts from "./pages/Postlist";



const router = new VueRouter({
    mode: 'history',
    routes : [
        { path: '/home', component: Home, name:"home"},
        { path: '/posts', component: Posts, name:"posts"},
        { path: '/contacts', component: Contacts, name:"contacts"},
    ]
});
const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});
