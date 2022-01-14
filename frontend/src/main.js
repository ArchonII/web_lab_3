import Vue, { createApp } from 'vue';
import App from './App.vue';
import router from "./router";
import store from './store';
import axios from 'axios';



//Vue.config.productionTip = false
/*
Vue.prototype.$http = axios.create({
  baseURL: 'http://localhost/api'
});*/


export const http = axios.create({
    baseURL: 'http://localhost/api'
  });
const app = createApp(App);
app.use(router);
//app.use(VueAxios, axios);
app.mount('#app');
