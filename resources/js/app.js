import { createApp } from 'vue';
import FreshLaravelComponent from './components/FreshLaravelComponent.vue';

const app = createApp({});
app.component('fresh-laravel-component', FreshLaravelComponent);
app.mount('#app');