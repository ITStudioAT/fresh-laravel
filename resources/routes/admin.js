import { createRouter, createWebHistory } from 'vue-router'
import Index from '@/pages/admin/index/Index.vue'
import Feedback_Error from '@/pages/admin/feedback/Error.vue'




const routes = [
    { path: '/admin', component: Index },
    { path: '/admin/error', component: Feedback_Error },


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