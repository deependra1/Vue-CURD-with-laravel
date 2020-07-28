import Vue from 'vue';
import App from './Main/App';

require('./bootstrap');

const app = new Vue({
    el: '#app',
    render:h=>h(App),
});

export default app;
