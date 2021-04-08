import { App, plugin } from '@inertiajs/inertia-vue'
import Vue from 'vue'
import vuetify from './plugins/vuetify' // path to vuetify export

Vue.use(plugin)
Vue.use(vuetify)



const el = document.getElementById('app')

new Vue({
  vuetify,
  render: h => h(App, {
    props: {
      initialPage: JSON.parse(el.dataset.page),
      resolveComponent: name => require(`./Pages/${name}`).default,
    },
  }),
}).$mount(el)