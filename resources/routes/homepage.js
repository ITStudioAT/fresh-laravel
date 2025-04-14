import { createRouter, createWebHistory } from 'vue-router'
import Index from '@/pages/homepage/index/Index.vue'
import Feedback_Error from '@/pages/homepage/feedback/Error.vue'


const routes = [
    { path: '/', component: Index },
    { path: '/homepage/error', component: Feedback_Error },


];

const router = createRouter({
    history: createWebHistory(),
    routes
});


router.beforeEach(async (to, from, next) => {

    next();
    return;



})


export default router;